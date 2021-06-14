<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
use App\cart;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {   
        //dd($request->product_id);
        $cart_item=DB::table('inventories')->where('id',$request->product_id)->first();
        //dd($cart_item);

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
            $cart->quantity=$request->quantity ? $request->quantity : $cart_item->min_order_quantity;;
            $cart->total= $cart_item->sale_price * ($request->quantity ? $request->quantity : $cart_item->min_order_quantity);
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

            }
            else
            {
                $quant=$old_cart->quantity + ($request->quantity ? $request->quantity : $cart_item->min_order_quantity);
                $item_count=$old_cart->item_count+ 1;
                $total= $old_cart->total + ($cart_item->sale_price * ($request->quantity ? $request->quantity : $cart_item->min_order_quantity));
                DB::table('carts')->where('id',$old_cart->id)
                    ->where('shop_id',$old_cart->shop_id)
                    ->update(array('item_count'=>$item_count,'quantity'=>$quant,'total'=>$total,'updated_at'=> Carbon::now()));
                
                
                DB::table('cart_items')
                    ->insert(['cart_id' =>$old_cart->id,
                            'inventory_id' => $cart_item->id,
                            'item_description'=> $cart_item->sku . ': ' . $cart_item->title . ' - ' . ' - ' . $cart_item->condition,
                            'quantity' =>$request->quantity ? $request->quantity : $cart_item->min_order_quantity,
                            'unit_price' => $cart_item->sale_price,
                            'created_at'=> Carbon::now(),
                            'updated_at'=> Carbon::now()]);


                session()->flash('success','Product is added to cart ');
            }
            
        }
        
        return redirect()->back();  

    }

    public function cartpage()
    {   
        $cart=true;
      $categories=$this->getsubgroup();
      $sub_categories=$this->getsubgroupcategories();
      $cat_product=$this->getcategoriesproduct();
        $img_url=$this->server_image_path;
        $currency=$this->currency;
       
       
        if(Auth::check())
        {
            $customer_id=Auth::id();
            //dd($customer_id);
            $customer_carts=Cart::where('customer_id',$customer_id)->get();
            if(!$customer_carts->isEmpty())
            {
                $carts_id=array();
                foreach($customer_carts as $cart)
                {
                    array_push($carts_id,$cart->id);
                }
                
                $cart_items=DB::table('cart_items')->whereIn('cart_id',$carts_id)->get();
                //dd($cart_items);
                return view('Layout.Pages.Cart_Checkout.cartpage_content',compact('cart','categories','sub_categories','cat_product','img_url','customer_carts','cart_items','currency'));
            }
            else
            {
                return $this->emptycart();
            }

        
            
            // $cart_items=DB::table('cart_items')->whereIn('cart_id',$carts_id)->get();
            // //dd($cart_items);
            // return view('layout.Cart.Cartpage.cartindex',compact('cart','categories','sub_categories','cat_product','img_url','carts_id','cart_items'));
        }
        else
        {
            return redirect()->route('login');
        }
    }

    
    public function emptycart()
    {
        $cart=true;
        $categories=$this->getsubgroup();
        $sub_categories=$this->getsubgroupcategories();
        $cat_product=$this->getcategoriesproduct();
        $img_url=$this->server_image_path;
       
       return view('Layout.Pages.Cart_Checkout.emptycart_content',compact('cart','categories','sub_categories','cat_product','img_url'));
    }

    

    public function destroy($id)
    {
        dd($id);
        $cart=Cart::where();
    }




    public function varient1()
    {
      
       return view('Layout.Pages.Cart_Checkout.var1_content');
    }
    public function varient2()
    {
      
       return view('Layout.Pages.Cart_Checkout.var2_content');
    }

    public function varient3()
    {
      
       return view('Layout.Pages.Cart_Checkout.var3_content');
    }

}
