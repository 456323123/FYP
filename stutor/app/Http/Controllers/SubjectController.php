<?php

namespace App\Http\Controllers;

use App\User;
use App\Store;
use App\Course;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SubjectController extends Controller
{
    //
      public function stepnewshow(Request $request)
{
  $courses=Course::get();
Session::put('page','subject_add');
return view('layouts.admin_layout.profile.storesubject')->with(compact('courses'));;
}

    public function subjectdelete($id)
{
    Store::find($id)->delete();

        return redirect('/subject-show')->with('status', 'Subject is Deleted');
}



public function stepnew(Request $request)

{Session::put('page','subjectview');

    $store=new Store;
    $data=$request->all();


    // if (!empty($subject)) {
    //     $Store=Store::where(['user_id'=>Auth::user()->id,'subject_name'=>$data['subject_name']])->count();
    //     if ($Store>0) {
    //         $message='Subject Already Exits Please And Other Subject!';
    //         Session::flash('success_message', $message);
    //         return redirect()->back();
    //     }
    // }

                  $roles = [
                'cours_name' => 'required',
                'subject_name' => 'required',


            ];

            $customessage = [
                'cours_name.required' => 'Course name name is required',
                 'subject_name.required' => 'Subject name  is required',

            ];



            $this->validate($request, $roles, $customessage);
if (!empty($data['cours_name'])) {
        $Store=Store::where(['user_id'=>Auth::user()->id,'cours_name'=>$data['cours_name']])->count();
        if ($Store>0) {
            $message='Course '.$data['cours_name'].' Already Exits Please Add an Other Course!';
            Session::flash('success_message', $message);
            return redirect()->back();
        }
    }

    if(isset($data['subject_name']))
    {
$subject=implode(',',$data['subject_name']);
    }

   $store->subject_name=$subject;
$store->cours_name=$data['cours_name'];
$store->user_id=Auth::user()->id;
      // $store=json_decode(json_encode($store));
      //echo "<pre>"; print_r($store);die;
    $store->save();

return redirect('/subject-show');


}



public function stepnviewuser()
{
Session::put('page','subject_view');
//$usercart=Subject::usercart();
$usercart=Store::select('cours_name','subject_name','id')->where('user_id',Auth::User()['id'])->get();
//   $usercart=json_decode(json_encode($usercart));

//     echo "<pre>"; print_r($usercart);die;
return view('layouts.admin_layout.profile.subject_show')->with(compact('usercart'));

}

public function appensubject(Request $request)
{
if($request->ajax())
{
$data=$request->all();
   $getcourse=Subject::where(['subject_name'=>$data['course_id']])->get();

   $getcourse=json_decode(json_encode($getcourse),true);
    // echo "<pre>"; print_r($getcourse);die;

     return view('layouts.admin_layout.profile.append_subjects')->with(compact('getcourse'));

}
}


}
