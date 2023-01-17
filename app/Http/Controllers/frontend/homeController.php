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
        $products=product::orderBy('Product_price','desc')->take(12)->get();
        return view('frontend.pages.partials.home',compact('categories','products',));
    }



                              //Search
    public function search(Request $request){
        //dd($request->all());
        $search_key=$request->search_key;
        //$Product_name=$request->Product_name;

        $order_by= $request->order_by ?? 'asc';

        
        $products=product::where('Product_name','LIKE','%'.$search_key.'%')->orderBy('Product_price','ASC')->get();
        
        return view('frontend.pages.search.search', compact('products'));
        
        
    }                          
}
