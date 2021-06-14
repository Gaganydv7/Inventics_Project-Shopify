<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    //Account
    public function login(){
        return view('Layout.Pages.Account.login_content');    
    }
    public function create(){
        $categories=$this->getsubgroup();
        $sub_categories=$this->getsubgroupcategories();
        $cat_product=$this->getcategoriesproduct();
        return view('Layout.Pages.Account.createacc_content',Compact('categories','sub_categories','cat_product'));
        // return view('Layout.Pages.Account.createacc_content');    
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

    
}
