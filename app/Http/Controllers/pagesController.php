<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class pagesController extends Controller
{
    // frontpage
    public function front(){
       $img_url=$this->server_image_path;
       $categories=$this->getsubgroup();
       $sub_categories=$this->getsubgroupcategories();
    //    dd($sub_categories);
       $cat_product=$this->getcategoriesproduct();
       $blog_category=$this->blogcategory();
       
    //    dd($blog_category);
       $sliders=$this->sliders();
       $banners=$this->banners();
       $currency=$this->currency;
    //    dd($banners);
       return view('welcome',compact('categories','sub_categories','cat_product','img_url','blog_category','sliders','banners','currency'));
    }

    //Index
    public function index(){
        return view('Layout.Index_Home.index_home_content');
    }
    
    //Product page
    public function page1($cat_group,$cat_name,$slug)
    {
        $categories=$this->getsubgroup();
        $sub_categories=$this->getsubgroupcategories();
        $cat_product=$this->getcategoriesproduct();
        // dd($cat_product);
        $img_url=$this->server_image_path;
        // $current_currency=$this->current_currency;

        $product=DB::table('products')->where('slug',$slug)->first();
        // dd($product);
        $product_images=DB::table('images')->where('imageable_id',$product->id)->get();
        // dd($product_images);
        $current_subgroup=DB::table('category_sub_groups')
        ->where('slug',$cat_group)->first();
        // dd($current_subgroup);
        $current_category=DB::table('categories')
        ->where('slug',$cat_name)->first();
        // dd($current_category);
        $currency=$this->currency;
        // dd($current_category);
        // $tempProduct=true;

        return view('Layout.Pages.Product_page.page1_content',compact('categories','sub_categories','cat_product','img_url','product','product_images','current_subgroup','current_category','currency'));

        
    }
    public function page2(){
        return view('Layout.Pages.Product_page.page2_content');
    }
    public function page3(){
        return view('Layout.Pages.Product_page.page3_content');
    }
    public function page4(){
        return view('Layout.Pages.Product_page.page4_content');
    }
    public function page5(){
        return view('Layout.Pages.Product_page.page5_content');
    }
    public function page6(){
        return view('Layout.Pages.Product_page.page6_content');
    }
    public function page7(){
        return view('Layout.Pages.Product_page.page7_content');    
    }



    //Cart
    public function cartpage(){
        return view('Layout.Pages.Cart_Checkout.cartpage_content');    
    }
    public function emptycart(){
        return view('Layout.Pages.Cart_Checkout.emptycart_content');    
    }
    public function varient1(){
        return view('Layout.Pages.Cart_Checkout.var1_content');    
    }
    public function varient2(){
        return view('Layout.Pages.Cart_Checkout.var2_content');    
    }
    public function varient3(){
        return view('Layout.Pages.Cart_Checkout.var3_content');    
    }


    //Account
    public function login(){
        return view('Layout.Pages.Account.login_content');    
    }
    public function create(){
        return view('Layout.Pages.Account.createacc_content');    
    }
    public function details(){
        return view('Layout.Pages.Account.accdetails_content');    
    }
    public function address(){
        return view('Layout.Pages.Account.accaddress_content');    
    }
    public function order(){
        return view('Layout.Pages.Account.orderhistory_content');    
    }
    public function wishlist(){
        return view('Layout.Pages.Account.wishlist_content');    
    }


    //Blog
    public function rightside(){
        return view('Layout.Pages.Blog.rightside_content');    
    }
    public function leftside(){
        return view('Layout.Pages.Blog.leftside_content');    
    }
    public function noside(){
        return view('Layout.Pages.Blog.noside_content');    
    }
    public function stickyside(){
        return view('Layout.Pages.Blog.stickyside_content');    
    }
    public function grid(){
        return view('Layout.Pages.Blog.grid_content');    
    }

    public function blogpost($slug){
        $categories=$this->getsubgroup();
        $sub_categories=$this->getsubgroupcategories();
        $cat_product=$this->getcategoriesproduct();
        $img_url=$this->server_image_path;
        $blog_category=$this->blogcategory();
       
        $current_blog=DB::table('blogs')->where('slug',$slug)->first();
        // dd($current_blog);
        $current_blog_image=DB::table('images')->where('imageable_id',$current_blog->id)
        ->where('images.imageable_type','App\blog')->first();
    
        return view('Layout.Pages.Blog.blogpost_content',compact('categories','sub_categories','cat_product','img_url','blog_category','current_blog','current_blog_image'));
    }

    //one-page
    public function gallery(){
        return view('Layout.Pages.Gallery.gallery_content');    
    }
    public function faq(){
        return view('Layout.Pages.Faq.faq_content');    
    }
    public function about(){
        return view('Layout.Pages.About_Us.about_us_content');    
    }
    public function contact(){
        return view('Layout.Pages.Contact_Us.contact_us_content');    
    }
    public function page_404(){
        return view('Layout.Pages.404_Page.404_page_content');    
    }
    public function typography(){
        return view('Layout.Pages.Typography.typography_content');    
    }
    public function soon(){
        return view('Layout.Pages.Coming_Soon.coming_soon_content');    
    }
    
}
