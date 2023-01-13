<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function user_create(){
        return view ('backend.pages.userpage.create');
    }

    public function user_list(){
        return view ('backend.pages.userpage.list');
    }
}
