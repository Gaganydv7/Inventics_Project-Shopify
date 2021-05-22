<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $server_image_path="http://zcommerce.online/image/";
    // public $my_category='Hygiene Essentials';
    public $my_category='Electronics';
    public $store_type='Medical';
    public $currency="Rs.";

    public function getsubgroup()
    {
        return DB::table('category_groups')
        ->join('category_sub_groups', 'category_groups.id', '=', 'category_sub_groups.category_group_id')
        ->where('category_groups.name',$this->my_category)->get();
    }

    public function getsubgroupcategories()
    {
        return DB::table('category_groups')
        ->join('category_sub_groups', 'category_groups.id', '=', 'category_sub_groups.category_group_id')
        ->join('categories', 'category_sub_groups.id', '=', 'categories.category_sub_group_id')
        ->where('category_groups.name',$this->my_category)
        ->select('categories.*','category_sub_groups.name as cat_sub_name')->get();
    }

    public function getcategoriesproduct($order="random")//random, latest
    {
        if($order=="random")
        {
            return DB::table('category_groups')
            ->join('category_sub_groups', 'category_groups.id', '=', 'category_sub_groups.category_group_id')
            ->join('categories', 'category_sub_groups.id', '=', 'categories.category_sub_group_id')
            ->join('category_product', 'categories.id', '=', 'category_product.category_id')
            ->join('products', 'category_product.product_id', '=', 'products.id')
            ->join('images', 'products.id', '=', 'images.imageable_id')
            ->where('category_groups.name',$this->my_category)
            ->where('images.imageable_type','App\Product')
            ->select('products.*','images.path as img_path','images.name as img_name','categories.slug as product_cat','category_sub_groups.slug as product_sub_cat','category_sub_groups.name as cat_sub_name')->inRandomOrder()->get();
        }
        elseif($order=="latest")
        {
            return DB::table('category_groups')
            ->join('category_sub_groups', 'category_groups.id', '=', 'category_sub_groups.category_group_id')
            ->join('categories', 'category_sub_groups.id', '=', 'categories.category_sub_group_id')
            ->join('category_product', 'categories.id', '=', 'category_product.category_id')
            ->join('products', 'category_product.product_id', '=', 'products.id')
            ->join('images', 'products.id', '=', 'images.imageable_id')
            ->where('category_groups.name',$this->my_category)
            ->where('images.imageable_type','App\Product')
            ->select('products.*','images.path as img_path','images.name as img_name','categories.slug as product_cat','category_sub_groups.slug as product_sub_cat','category_sub_groups.name as cat_sub_name')->orderBy('updated_at', 'DESC')->get();
        
        }
        
    }


    public function blogcategory()
    {
        return DB::table('blogs')
        ->join('images','blogs.id', '=', 'images.imageable_id')
    //    ->where('sliders.store_type',$this->store_type)
        ->where('images.imageable_type','App\blog')
        ->get();
    }
    

    public function sliders()
    {
       return DB::table('sliders')
       ->join('images','sliders.id', '=', 'images.imageable_id')
    //    ->where('sliders.store_type',$this->store_type)
       ->where('images.imageable_type','App\slider')
       ->inRandomOrder()->get();
    }

    public function banners()
    {
        return DB::table('banners')
        ->join('images','banners.id', '=', 'images.imageable_id')
        // ->where('banners.store_type',$this->store_type)
        ->where('images.imageable_type','App\banner')
       ->get();
        
    }



}
