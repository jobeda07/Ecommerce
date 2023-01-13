<?php

namespace App\Http\Controllers\auth;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class authController extends Controller
{
    public function register(Request $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);

        //notify()->success('User Created Successfully.');
        return redirect()->back();
    }

    public function login(Request $request){
        // $credentials['email']=$request->email;
        // $credentials['password']=$request->password;
        $credentials=$request->except('_token');
        // dd($credentials);   
        if(auth()->attempt($credentials) && auth()->user()->role=="admin")
        
          
        {
            //notify()->success('User logged in Successfully.');
            return redirect()->route('dashboard');
        } 
        //notify()->success('Invalid credentials');
        return to_route('home');
    }

    public function logout(){
        auth()->logout();
        return to_route('home');
    }

    public function four_three(){
     return view('frontend.pages.auth.403');
    }
}
