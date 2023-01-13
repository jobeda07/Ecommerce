<?php

namespace App\Http\Controllers\frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\product;

class homeController extends Controller
{
    public function home(){
        $categories=Category::all();
        $products=product::all();
        return view('frontend.pages.partials.home',compact('categories','products'));
    }
}
