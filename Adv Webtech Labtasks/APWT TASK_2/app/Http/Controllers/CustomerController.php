<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function login(){
        return view('login');
    }
    public function logout(){
        return view('login');
    }
    public function customerCreate(){
        return view('registration');
    }
    public function contact(){
        return view('contact');
    }
    public function home(){
        return view('home');
    }
    public function customerCreateSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            "address"=>"required",
            'username'=>'required',
            'pass'=>'required|regex:/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*#?&^_-]).{8,}/',
            'email'=>'required|email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
        ['name.required'=>"Please put you name here",
        'pass.regex'=>"Password contains at least one lower Case character, one digit, one special character and minimum 8 characters."]
    );
        //return $request;
        $customer = new  Customer();
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->username = $request->username;
        $customer->pass = $request->pass;        
        $customer->email = $request->email;
        $customer->phone = $request->phone;       
        $customer->save();

        return redirect()->route('login');

    }

    public function loginFormSubmitted(Request $request){
        $validate = $request->validate([
            "username"=>"required|min:5|max:20",
            "pass"=>"required|regex:/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*#?&^_-]).{8,}/"
        ],
        ['username.required'=>"Please put you username here",
        'pass.regex'=>"Password contains at least one lower Case character, one digit, one special character and minimum 8 characters"]
    );
        //return $request;
        $customer = Customer::where('username', $request->username)->first();
        if(isset($customer)){

        if(strcmp($customer->username,$request->username)==0 && strcmp($customer->pass,$request->pass)==0){
            return view('home')->with('customer', $customer);  
        }
        else{
            return back()->with('error','Invalid Username or Password');
        }
    }
    else{
        return back()->with('error','Invalid Username or Password');
    }
    
}
public function contactSubmitted(Request $request){
    $validate = $request->validate([
        "name"=>"required|min:5|max:20",
        'email'=>'required|email',
        'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
    ],
    ['name.required'=>"Please put you username here",
    'phone.regex'=>"Enter a valid phone number."]
);
return back()->with('text','Information Validated.');
}
}