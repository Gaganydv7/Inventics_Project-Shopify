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
       $currency=$this->currency;
        

        $product=array();
        foreach($cat_product as $cat)
        {
            if($cat->slug==$slug)
            {
                $product=$cat;
            }
        }

        $product_images=$product->img_path;


        $current_subgroup=DB::table('category_sub_groups')
        ->where('slug',$cat_group)->first();
        $current_category=DB::table('categories')
        ->where('slug',$cat_name)->first();
        // dd($product);
        
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
