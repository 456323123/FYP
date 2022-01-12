<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\User;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{

    public function addsubject(Request $request)
    {
  if($request->isMethod('post'))
        {
            $data=$request->all();
           foreach ($data['name'] as $key => $value) {



               if(!empty($value)){
                   $attributescountSKU=Course::where('name',$value)->count();
                   if($attributescountSKU>0)
                   {

                    $message='This '.$value.'course Already Exits Please And Other course!';
                    Session::flash('success_message', $message);
                    return redirect()->back();


                }


                   $attributes=new Course;

                   $attributes->name=$data['name'][$key];

                   $attributes->status=0;
                   $attributes->save();
               }

           }
        }
        $course=Course::get();
        return view('admin.add-subject')->with(compact('course'));

    }



        public function subjects(Request $request)
    {


          $course=Course::get();
        $new=Subject::get();
        return view('admin.subjects')->with(compact('new','course'));

    }
public function datapostsubjectcourst(Request $request)
{


 for ($i=0; $i <count($request->course); $i++)

{
                //    $attributescountSKU=Subject::where('coursename',$value)->count();
                //    if($attributescountSKU>0)
                //    {

                //     $message='This '.$value.'course Already Exits Please And Other course!';
                //     Session::flash('success_message', $message);
                //     return redirect()->back();


                // }


                   $attributes=new Subject();
                   $attributes->subject_name=$request->course[$i];
                   $attributes->coursename=$request->subject[$i];


                   $attributes->user_id=0;
                   $attributes->save();






        }
        return redirect()->back();
}
public function deletecoursesubject($id)
    {
        $users=Subject::find($id);
        // dd($users);
     $users->delete();
          return redirect('/subjects')->with('success_message', 'subject and course  is Deleted');
    }
    public function register()
    {
        $users=User::latest()->paginate(5);
        return view('admin/register')->with('users',$users);
    }
    public function status(Request $request, $id)
    {
        $data = User::find($id);
        if ($data->status == 0) {
            $data->status = 1;
        } else {
            $data->status =0;
        }
        $data->save();

        return redirect('/role-register')->with('status', 'User is Appove');
    }

    public function delete($id)
    {
        $users=User::findorFail($id);
        $users->delete();
          return redirect('/role-register')->with('status', 'User Data is Deleted');
    }

    public function registeredit(Request $request,$id)
    {
        $users = User::findorFail($id);
        return view('admin.register-edit')->with('users',$users);
    }


   public function registerupdate(Request $request, $id){

        $users = User::find($id);
        $this->validate(request(), [
            'status' => 'required',

        ]);
        $users->name=$request->input('username');
        $users->usertype = $request->input('usertype');
         $users->status = $request->input('status');
        $users->update();

   return redirect('/role-register')->with('status','Your Data is updated');

   }

public function search(Request $request){
$serach = $request->get('search');
$name=DB::table('users')->where('name','like' ,'%'.$serach.'%')->orWhere('phone', 'LIKE', '%' . $serach . '%')->latest()->paginate(5);
        if (count($name) > 0) {
            return view('admin\register', ['users' => $name]);
        } else {
            return redirect()->route('sources-index')->with('status', 'We are sorry. We cannot find any users who match your search criteria.');
        }

}

//  public function showmornewedata(Request $request,$id)
//  {

//  }

 public function downloadcv($file)
 {
          return response()->download('uploads/document/'.$file);
 }

}
