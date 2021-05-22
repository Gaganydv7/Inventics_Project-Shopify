<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class categoryController extends Controller
{
        //Category
        public function sidebar($slug){
            $img_url=$this->server_image_path;
            $currency=$this->currency;
            $categories=$this->getsubgroup();
            $sub_categories=$this->getsubgroupcategories();
            //getting with images
            $cat_product=$this->getcategoriesproduct("latest");


            
            
            
            $allBrands=array();
            
            foreach($cat_product as $product)
           
            
            {
                
                $flag=0;
                foreach($allBrands as $br)
                {
                    if($product->brand==$br)
                    {
                        $flag=1;
                        break;
                    }
                }
                if($flag==0)
                {
                    array_push($allBrands,$product->brand);
                }
            }
    
            // dd($allBrands);
    
            $tempcategory=true;
            return view('Layout.Pages.Category_page.sidebar_content',compact('tempcategory','categories','sub_categories','cat_product','img_url','currency','slug','allBrands'));
        }
            public function close(){
                return view('Layout.Pages.Category_page.close_content');    
            }
            public function horizontal(){
                return view('Layout.Pages.Category_page.horizontal_content');    
            }
            public function listing(){
                return view('Layout.Pages.Category_page.listing_content');    
            }
            public function empty(){
                return view('Layout.Pages.Category_page.empty_content');    
            }
}
