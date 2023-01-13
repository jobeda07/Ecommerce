<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\subcategory;
use Illuminate\Http\Request;

class SubcatController extends Controller
{
    public function Subcat_list(){

        $subcats=subcategory::with('categoryRelation')->get();
        return view ('backend.pages.subcategorypage.list', compact('subcats'));
    }
    public function Subcat_create(){
        $category=Category::all();
        return view ('backend.pages.subcategorypage.create',compact('category'));
    }
    public function Subcat_store(Request $request){
      subcategory::create([
          'subcat_name'=>$request->subcat_name,
          'subcat_status'=>$request->subcat_status,
          'category_id'=>$request->category_id,
          'subcat_description'=>$request->subcat_description,
      ]);
      return to_route('Subcategory.list');
    }
    public function Subcat_edit($id){
        $category=Category::all();
        $subcats_edit=subcategory::find($id);
        return view ('backend.pages.subcategorypage.edit',compact('subcats_edit','category'));
    }
    public function Subcat_update(Request $request,$id){
        $subcats=subcategory::find($id);
        $subcats->update([
            'subcat_name'=>$request->subcat_name,
          'subcat_status'=>$request->subcat_status,
          'subcat_description'=>$request->subcat_description
        ]);
        return to_route('Subcategory.list');
    }
    public function Subcat_delete($id){
        subcategory::find($id)->delete();
        return back();
    }
}
