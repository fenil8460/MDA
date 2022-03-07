<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Users;
use Illuminate\Support\Facades\Session;
use Redirect;


class LoginController extends Controller
{
     public function index(Request $req)
    {
    	$user= Users::where('email', $req->input('email'))
    	->where('password', $req->input('password'))
    	->first(['name','Id']);
    	if($user)
    	{
            //print_r($user->Id);
            Session::put('Id',$user->Id);
            return redirect('/dashboard');
    	}
    	else{
    			Session::pull('error', 'Invalid credentials'); 
    			 return view('Admin.login');
    		//return view('Admin.login')->with('success','Item created successfully!');
    		//return Redirect::back()->with('error', 'Invalid credentials');
    			 
    	}
    	//return $req->input('email');
      
    }
}
