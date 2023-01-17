<?php

namespace App\Http\Controllers\frontend;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class shopController extends Controller
{
    public function shop_page(){
        $categories=Category::all();
        $products=product::paginate(8);
        return view('frontend.pages.shoppage.shoppage',compact('products','categories'));
    }
    public function shop_details(){
        $categories=Category::all();
        return view('frontend.pages.shopdetails.shopdetails',compact('categories'));
    }
}
