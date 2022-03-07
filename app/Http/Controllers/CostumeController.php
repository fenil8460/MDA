<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostumeController extends Controller
{
    public function costume()
    {
    	return view('Admin.costume.costume'); 
    }
    public function costume_picture(Request $req)
    {
    	echo $req->input('costume');
          return back()->with("status", "Your data has been Inserted Successfully.");
    }

}
