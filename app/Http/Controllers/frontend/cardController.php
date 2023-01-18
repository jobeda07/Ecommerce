<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class cardController extends Controller
{
    public function cart_view(){
        return view('frontend.pages.Cart.cartpage.cart');
    }    


    public function add_cart_page($id){
        $product=product::find($id);
        $currentCart=session()->get('myCart');
        if(empty($currentCart)){
            //case1:add new product to cart
            $cart[$id]=[
                'product_name'=>$product->Product_name,
                'product_price'=>$product->Product_price,
                'product_quantity'=>1,
                'subtotal'=>$product->Product_price,
                'image'=>$product->Product_image
            ];  
            session()->put('myCart',$cart);

        } if(array_key_exists($id,$currentCart)){
        //case 2: product exist quantity increase, sub-total
//  $currentCart[$id]['product_quantity']= $currentCart[$id]['product_quantity']+1    ;

       ++$currentCart[$id]['product_quantity'];
         $currentCart[$id]['subtotal']=$currentCart[$id]['product_quantity']*$currentCart[$id]['product_price'];
         session()->put('myCart',$currentCart);
         
        }
        else{
                $currentCart[$id]=[
                    'product_name'=>$product->Product_name,
                    'product_price'=>$product->Product_price,
                    'product_quantity'=>1,
                    'subtotal'=>$product->Product_price,
                    'image'=>$product->Product_image
                ];
            session()->put('myCart',$currentCart);    
        }
        
       //notify()->success('Product added to cart.');
       return redirect()->back();
    }

    





















    public function cart_item_delete($id)
    {
       $newCart=session()->get('myCart');
        unset($newCart[$id]);
        session()->put('myCart',$newCart);

        //notify()->success('Item deleted from cart.');
        return redirect()->back();
    }


}
