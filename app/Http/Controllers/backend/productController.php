<?php

namespace App\Http\Controllers\backend;

use App\Models\product;
use App\Models\Category;
use App\Models\subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class productController extends Controller
{
    public function product_list(){
        $products=product::with('cat_Relation','subcat_Relation')->get();
        return view ('backend.pages.productpage.list',compact('products'));
    }
    public function product_create(){
        $category=Category::all();
        $subcategory=subcategory::all();
        return view ('backend.pages.productpage.create',compact('category','subcategory'));
    }
    public function product_store(Request $request){
     
        $fileName=null;
        if($request->hasFile('Product_image')){
            $fileName=date('ysis').'.'.$request->file('Product_image')->getClientOriginalExtension();
            $request->file('Product_image')->storeAs('/uploads/Productimg',$fileName);
        }
        product::create([
            'Product_name'=>$request->Product_name,
            'Product_image'=>$fileName,
            'Product_price'=>$request->Product_price,
            'Product_size'=>$request->Product_size,
            'brand'=>$request->brand,
            'stock_status'=>$request->stock_status,
            'category_id'=>$request->category_id,
            'subcategory_id'=>$request->subcategory_id,
            'product_description'=>$request->Product_description,
        ]);
        return to_route('product.list');
    }
    public function product_edit($id){
        $category=Category::all();
        $subcategory=subcategory::all();
        $product_edit=product::find($id);
        return view('backend.pages.productpage.edit' ,compact('product_edit','category','subcategory'));
    }
    public function product_update(Request $request,$id){
    
       $product=product::find($id);
       $fileName=$product->product_image;
       if($request->hasFile('Product_image')){
        $removefile=public_path().'/uploads/Productimg/'.$fileName;
        File::delete($removefile);
        $fileName=date('ysis').'.'.$request->file('Product_image')->getClientOriginalExtension();
        $request->file('Product_image')->storeAs('/uploads/Productimg/',$fileName);
       }
       $product->update([
        'Product_name'=>$request->Product_name,
        'Product_image'=>$fileName,
        'Product_price'=>$request->Product_price,
        'Product_size'=>$request->Product_size,
        'brand'=>$request->brand,
        'stock_status'=>$request->stock_status,
        'category_id'=>$request->category_id,
        'subcategory_id'=>$request->subcategory_id,
        'product_description'=>$request->Product_description,
    ]);
    return to_route('product.list');
    }
    public function product_delete($id){
        $product=product::find($id);
        $fileName=$product->Product_image;
        $removefile=public_path().'/uploads/Productimg/'.$fileName;
           File::delete($removefile);
        $product->delete();
        return back();
        
    }
}
