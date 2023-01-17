<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $guarded=[''];

    public function cat_Relation(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function subcat_Relation(){
        return $this->belongsTo(subcategory::class,'subcategory_id','id');
    }
	
}
