<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    public function corporateEntertainment()
    {
        // $data = DB::table('image')->where('category_name','corporate_entertainment')->get();
        // ,['data'=>$data[0]]
    	return view('hire_us.corporate_entertainment');
    }
   
    public function schoolWorkshops()
    {
        $data = DB::table('image')->where('category_name','school_workshops')->get();
        return view('hire_us.school_workshops',['data'=>$data[0]]);
    }

    public function indowestern()
    {
    	$data = DB::table('image')->where('category_name','indowestern')->where('sub_category_name',null)->orderBy('rank', 'ASC')->get();
        return view('costume.indowestern',['data'=>$data]);
    }
    
    public function indowesternAge8()
    {
    	$data = DB::table('image')->where('category_name','indowestern')->where('sub_category_name','age_4_8')->orderBy('rank', 'ASC')->get();
        return view('costume.indowestern.age_4_8',['data'=>$data]);
    }

    
    public function indowesternAge12()
    {
    	
    }

    public function indowesternAge16()
    {
    	
    }

    public function western()
    {
    	
    }

    public function westernAge8()
    {
    	
    }

    public function westernAge12()
    {
    	
    }

    public function westernAge16()
    {
    	
    }

    public function classical()
    {
    	
    }

    public function home()
    {
    	
    }


}
