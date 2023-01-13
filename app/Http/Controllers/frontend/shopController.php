<?php

namespace App\Http\Controllers\frontend;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class shopController extends Controller
{
    public function shop_page(){
        $products=product::paginate(8);
        return view('frontend.pages.shoppage.shoppage',compact('products'));
    }
    public function shop_details(){
        return view('frontend.pages.shopdetails.shopdetails');
    }
}
