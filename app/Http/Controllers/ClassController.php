<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Session;
use App\Users;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class ClassController extends Controller
{
    //

    public function class()
    {
    	$grouplist = DB::table('class_group')->select('Id','group_name')->where('status','1')->get();

    	return view('Admin.class')->with('grouplist', $grouplist);

      
    }
    public function classdata(Request $req)
    {
    	//print_r($req->input('days'));
    	//print_r($req->input('gender'));
    	//print_r($req->input('class_group'));
    	// $validator = Validator::make($req->all(), [
         //   'days' => 'required',
           // 'gender' => 'required',
        //]);
        $rules = [
            'classname' => 'required',
            'description'=>	'required',
            'days'=>'required',
            'gender'=>'required',
            'class_start'=>'required',
            'class_end'=>'required',
            'class_timing'=>'required',
            'tuition'=>'required',
            'class_group'=>'required',
        ];
         $this->validate($req, $rules);
	//print_r($req->input('days'));
	$day="";
	for($i=0; $i< count($req->input('days'));$i++)
	{
     	if($i==count($req->input('days'))-1)
     		{$day=$day.$req->input('days')[$i];}
		else
			{$day=$day.$req->input('days')[$i].",";}        
	}
    DB::table('class')->insert(
    	array(
            'class_name'     =>  $req->input('classname') , 
           	'class_description'   =>  $req->input('description'),
           	'days'		=>$day,
           	'time'		=>$req->input('class_timing'),
           	'age'		=>$req->input('age'),
           	'gender'		=>$req->input('gender'),
           	'class_start_date'		=>$req->input('class_start'),
           	'class_end_date'		=>$req->input('class_end'),
           	'tuition'		=>$req->input('tuition'),
           	'class_group'		=>$req->input('class_group'),
           	'created_by'		=>Session::get('Id'),
     		)
	);
          return redirect('/dashboard')->with("status", "Your data has been Inserted Successfully.");
    }
    public function dashboard()
    {
      $grouplist1 = DB::table('class_group')->select('Id','group_name')->where('status','1')->get();
      //return view('Admin.class')->with('grouplist', $grouplist);

    	$grouplist = DB::select("SELECT class.*, class_group.group_name FROM class,class_group WHERE class.class_group=class_group.Id and class.status=1 ORDER by class.class_group");
    	//print_r($grouplist);
    	return view('Admin.dashboard')->with('grouplist', $grouplist)->with('classlist', $grouplist1);

      
    }
    public function class_group()
    {
      return view('Admin.class_group')->with('grouplist', $this->grouplists());
    }
     public function groupdata(Request $req)
    {
        $rules = [
            'groupname' => 'required',
        ];
         $this->validate($req, $rules);
    DB::table('class_group')->insert(
      array(
            'group_name'     =>  $req->input('groupname') , 
            'created_by'    =>Session::get('Id'),
        )
  );
          return back()->with("status", "Your data has been Inserted Successfully.");
    }

     public function edit_group($Id)
    {
      //echo $Id;
      $groupdata=DB::table('class_group')->find($Id);
      return view('Admin.class_group')->with('grouplist',$this->grouplists())->with('groupdata', $groupdata);
    }

    public function edit_group_data(Request $req,$Id)
    {
        $rules = [
            'groupname' => 'required',
        ];
         $this->validate($req, $rules);
         DB::table('class_group')->where('Id', $Id)
        ->update(array(
          'group_name' => $req->input('groupname'),
          'last_updated_by'=>Session::get('Id'),
          'last_updated_at'=>Carbon::now()->toDateTimeString(),
        )
      );
      return redirect('/class_group')->with([ "status"=>"Your data has been Updated Successfully"]);

    }
     public function delete_group($Id)
    {
     DB::table('class_group')->where('Id', $Id)
        ->update(array(
          'status' => 0,
          'last_updated_by'=>Session::get('Id'),
          'last_updated_at'=>Carbon::now()->toDateTimeString(),
        )
      );
      return redirect('/class_group')->with('grouplist',$this->grouplists())->with([ "status"=>"Your data has been Deleted Successfully"]);
    }

    public function edit_class($Id)
    {
      //echo $Id;
        $grouplist = DB::table('class_group')->select('Id','group_name')->where('status','1')->get();
        //$classdata = DB::select("SELECT class.*, class_group.group_name FROM class,class_group WHERE class.class_group=class_group.Id and class.Id="$id);
        $classdata=DB::table('class')->find($Id);
        //$classdata->class_group=DB::table('class_group')->where('Id',$Id)->value("group_name");
      return view('Admin.class')->with('grouplist',$this->grouplists())->with('classdata', $classdata);
    }
     public function edit_class_data(Request $req,$Id)
    {
        $rules = [
            'classname' => 'required',
            'description'=> 'required',
            'days'=>'required',
            'gender'=>'required',
            'class_start'=>'required',
            'class_end'=>'required',
            'class_timing'=>'required',
            'tuition'=>'required',
            'class_group'=>'required',
        ];
         $this->validate($req, $rules);
         $day="";
        for($i=0; $i< count($req->input('days'));$i++)
        {
            if($i==count($req->input('days'))-1)
            {$day=$day.$req->input('days')[$i];}
            else
            {$day=$day.$req->input('days')[$i].",";}        
        }
         DB::table('class')->where('Id', $Id)
        ->update(array(
            'class_name'     =>  $req->input('classname') , 
            'class_description'   =>  $req->input('description'),
            'days'    =>$day,
            'time'    =>$req->input('class_timing'),
            'age'   =>$req->input('age'),
            'gender'    =>$req->input('gender'),
            'class_start_date'    =>$req->input('class_start'),
            'class_end_date'    =>$req->input('class_end'),
            'tuition'   =>$req->input('tuition'),
            'last_updated_by'=>Session::get('Id'),
            'last_updated_at'=>Carbon::now()->toDateTimeString(),
        )
      );
        return redirect('/dashboard')->with([ "status"=>"Your data has been Updated Successfully"]);
    }
     public function delete_class($Id)
    {
      //echo $Id;
     DB::table('class')->where('Id', $Id)
        ->update(array(
          'status' => 0,
          'last_updated_by'=>Session::get('Id'),
          'last_updated_at'=>Carbon::now()->toDateTimeString(),
        )
      );
      return redirect('/dashboard')->with([ "status"=>"Your data has been Deleted Successfully"]);
    }
    private function grouplists()
    {
       $grouplist = DB::table('class_group')->where('status','1')->get();
      foreach ($grouplist as $key => $value) {
         $value->created_by= Users::find($value->created_by)->value('name');
         if($value->last_updated_by!="")
         {$value->last_updated_by= Users::find($value->last_updated_by)->value('name');}
     }
       return $grouplist;
    }
}
