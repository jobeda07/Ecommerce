<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function orderpage(){
        return view('frontend.pages.order.orderpage');
    }
}
