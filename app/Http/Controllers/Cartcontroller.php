<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
use App\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {   
        //dd($request->product_id);
        $cart_item=DB::table('inventories')->where('id',$request->product_id)->first();
        //dd($cart_item->);

        //check if authenticated
        if(Auth::check())
        {
            $customer_id=Auth::id();
            //dd($customer_id);
        }
        else
        return redirect()->route('login');

         //check if customer id with shop id exist in the cart table or not
        $old_cart= Cart::where('customer_id',$customer_id)
                        ->where('shop_id',$cart_item->shop_id)
                        ->first();

        //dd($old_cart);

        

        if($old_cart==null)
        {
            $cart=New Cart;
            $cart->shop_id=$cart_item->shop_id;
            $cart->customer_id=$customer_id;
            $cart->ip_address=$request->ip();
            $cart->item_count=1;
            $cart->quantity=1;
            
            $cart->save();

            $cart_item_pivot_data = [];
            $cart_item_pivot_data[$cart_item->id] = [
            'inventory_id' => $cart_item->id,
            'item_description'=> $cart_item->sku . ': ' . $cart_item->title . ' - ' . ' - ' . $cart_item->condition,
            'quantity' =>1,
            'unit_price' => $cart_item->sale_price,
            ];

            // Save cart items into pivot
            if ( ! empty($cart_item_pivot_data) ) 
            {
                $cart->inventories()->syncWithoutDetaching($cart_item_pivot_data);
            }
            session()->flash('success','Product is added to cart ');

            
        }
        else
        {
            // Check if the item is alrealy in the cart
            $item_in_old_cart=DB::table('cart_items')->where('cart_id',$old_cart->id)
                                    ->where('inventory_id',$cart_item->id)->first();
                
            if($item_in_old_cart)
            {
                session()->flash('warning','Product is already in cart');

                //  {{-- $quant=$item_in_old_cart->quantity +1;

                // //dd($quant);
                // $old_cart->quantity= $old_cart->quantity+1;
                // DB::table('carts')->where('id',$old_cart->id)
                //     ->where('shop_id',$old_cart->shop_id)
                //     ->update(array('quantity'=>$old_cart->quantity));
                    
                // DB::table('cart_items')->where('cart_id',$old_cart->id)
                //     ->where('inventory_id',$cart_item->id)
                //     ->update(array('quantity'=>$quant)); 
                // session()->flash('success','Product is added to cart '); --}}
            }
            else
            {
                $quant=$old_cart->quantity +1;
                $item_count=$old_cart->item_count+ 1;
                DB::table('carts')->where('id',$old_cart->id)
                    ->where('shop_id',$old_cart->shop_id)
                    ->update(array('item_count'=>$item_count,'quantity'=>$quant));
                
                
                DB::table('cart_items')
                    ->insert(['cart_id' =>$old_cart->id,
                            'inventory_id' => $cart_item->id,
                            'item_description'=> $cart_item->sku . ': ' . $cart_item->title . ' - ' . ' - ' . $cart_item->condition,
                            'quantity' =>1,
                            'unit_price' => $cart_item->sale_price,]);

                session()->flash('success','Product is added to cart ');
            }
            
        }
        
        return redirect()->back();  

    }

    public function cart()
    {   
        $cart=true;
        $category_sub_group=$this->category_sub_group();
        $categories=$this->categories();
        $products=$this->products();
        $img_url=$this->server_image_path;
       
       
        if(Auth::check())
        {
            $customer_id=Auth::id();
            //dd($customer_id);
            $carts=Cart::where('customer_id',$customer_id)->get();
            $carts_id=array();
            foreach($carts as $cart)
            {
                array_push($carts_id,$cart->id);
            }
            
            $cart_items=DB::table('cart_items')->whereIn('cart_id',$carts_id)->get();
            //dd($cart_items);
            return view('electronic.cart',compact('cart','category_sub_group','categories','products','img_url','carts_id','cart_items'));
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function cart_empty()
    {
        $cart=true;
        $category_sub_group=$this->category_sub_group();
        $categories=$this->categories();
        $products=$this->products();
        $img_url=$this->server_image_path;
        return view('electronic.cart_empty',compact('cart','category_sub_group','categories','products','img_url'));
    }

    public function checkout($no=null)
    {
        $category_sub_group=$this->category_sub_group();
        $categories=$this->categories();
        $products=$this->products();
        $img_url=$this->server_image_path;
        if($no==1)
        {
           return view('electronic.checkout_1',compact('category_sub_group','categories','products','img_url'));
        }
        elseif($no==2)
        {
            return view('electronic.checkout_2',compact('category_sub_group','categories','products','img_url'));
        }
        else
        {
            return view('electronic.checkout',compact('category_sub_group','categories','products','img_url'));
        }
        
    }
}