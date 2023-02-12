<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use App\Models\Customer;

class CustomerController extends Controller {
    //
    function login(Request $req)
    {

        $customer= Customer::where(['email'=>$req->email])->first();

        if(!$customer || !Hash::check($req->password,$user->password)) {

            return "Username or password is not matched";

        } else{

            $req->session()->put('customer',$customer);
            return redirect('/');
            
        }
    }
}