<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    //Blog 
    public function rightside(){
        $categories=$this->getsubgroup();
        $sub_categories=$this->getsubgroupcategories();
        $cat_product=$this->getcategoriesproduct();
        $img_url=$this->server_image_path;
        $blog_category=$this->blogcategory();
        return view('Layout.Pages.Blog.rightside_content',compact('img_url','blog_category','categories','sub_categories','cat_product'));
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
}
