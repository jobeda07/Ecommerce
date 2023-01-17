<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class cardController extends Controller
{
    




    public function add_cart_page($id){
        $product=product::find($id);

        $cart[$id]=[
            'product_name'=>$product->Product_name,
            'product_price'=>$product->Product_price,
            'product_quantity'=>0,
            'subtotal'=>$product->Product_price,
            'image'=>$product->Product_image
        ];  
        session()->put('myCart',$cart);
       //notify()->success('Product added to cart.');
       return redirect()->back();
    }

    public function cart_view(){
        return view('frontend.pages.Cart.cartpage.cart');
    }
}
