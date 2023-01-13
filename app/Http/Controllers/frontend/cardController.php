<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cardController extends Controller
{
    public function card_page(){
        return view('frontend.pages.card.cardpage.cardpage');
    }
    public function checkout_page(){
        return view('frontend.pages.card.checkout.checkout');
    }
}
