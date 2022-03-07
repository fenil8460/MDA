<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use Validator;

class ContactController extends Controller
{
    //
    function addContactData(Request $req){
       try{
        $req->phone != '' ? $req->validate([
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ]) : null;
        DB::table('contact_us')->insert([
            'first_name'=>$req->first_name,
            'last_name'=>$req->last_name,
            'email'=>$req->email,
            'phone_no'=>$req->phone,
            'message'=>$req->message,
        ]);
        }
        finally{
            $details = [
            'firstname'=>$req->first_name,
            'lastname'=>$req->last_name,
            'email'=>$req->email,
            'message'=>$req->message
        ];
            Mail::to(env("MAIL_TO"))->send(new TestMail($details));
        }
        return back()->with("status", "Your data has been Inserted Successfully.");
    }
}
