<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


class categoryController extends Controller
{
    public function category_list(){
         $categories=Category::all();
        return view ('backend.pages.categorypage.list',compact('categories'));
    }

    public function category_create(){
        return view ('backend.pages.categorypage.create');
    }
    public function category_store( Request $request){
        //dd($request);
        $request->validate([
            'category_name'=>'required',
            'category_image'=>'required',
            'category_status'=>'required',
            'category_description'=>'required'
        ]);

        $fileName=null;
        if($request->hasFile('category_image')){
            $fileName='category'.'_'.date('ymhmsis').'.'.$request->file('category_image')->getClientOriginalExtension();
            $request->file('category_image')->storeAs('/uploads/Categoryimg',$fileName);
        }
        Category::create([
            'category_name'=>$request->category_name,
            'category_image'=>$fileName,
            'category_status'=>$request->category_status,
            'category_description'=>$request->category_description
        ]);
        return to_route('category.list')->with('message','Category create Successfully');
    }
    public function cat_edit($id){
        $cat_view=Category::find($id);
          return view('backend.pages.categorypage.edit', compact('cat_view'));
    }
    public function cat_update(Request $request,$id){
        
        $category=Category::find($id);
         $fileName=$category->category_image;
         if($request->hasFile('category_image')){
            $removefile=public_path().'/uploads/Categoryimg/'.$fileName;
            File::delete($removefile);
            $fileName='category'.'_'.date('ymdhmsis').'.'.$request->file('category_image')->getClientOriginalExtension();
            $request->file('category_image')->storeAs('/uploads/Categoryimg/',$fileName);
         }
        $category->update([
            'category_name'=>$request->category_name,
            'category_image'=>$fileName ,
            'category_status'=>$request->category_status,
            'category_description'=>$request->category_description
        ]);
        return to_route('category.list')->with('update','Category update Successfully');
     }

     public function cat_delete($id){
        $category=Category::find($id);
        $fileName=$category->category_image;
        $removefile=public_path().'/uploads/Categoryimg/'.$fileName;
        File::delete($removefile);
        Category::find($id)->delete();
        return back();
     }
}
