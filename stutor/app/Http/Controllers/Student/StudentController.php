<?php

namespace App\Http\Controllers\Student;

use App\User;
use App\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
     public function home()
    {
        Session::put('page','home');
        $users = User::paginate(5);
        return view('teacher.showdata')->with('todos', $users);
    }

     public function studentdashboard()
    {
        return view('teacher.admin_layout');
    }

     public function profilenew()
    { Session::put('page','profile');
        return view('teacher.profilenew', array('user' => Auth::user()));
    }




  public function Responsechat()

     {
         Session::put('page','response');
            $Appointment=Auth::user()->id;
            $Appointment=Response::where('receiver_id',$Appointment)->get();
            //$Appointment=json_decode(json_encode($Appointment));

          //  echo "<pre>"; print_r($Appointment);die;
            return view('teacher.chat')->with(compact('Appointment'));
     }

     public function Message()

     {
         Session::put('page','message');
            $sender_id=Auth::user()->id;
            $Appointment=Response::where('sender_id',$sender_id)->get();
            //$Appointment=json_decode(json_encode($Appointment));

          // echo "<pre>"; print_r($Appointment);die;
            return view('teacher.message')->with(compact('Appointment'));
     }









      public function searchnew(Request $request)
    {

        $title = $request->get('searchname');
    $category = $request->get('searchphone');
        $items = \App\User::where([
        ['address', 'LIKE', '%' . $title . '%'],
        ['city', 'LIKE', '%' . $category . '%'],
    ])->paginate();

         if (count($items) > 0) {
            return view('teacher.showdata', ['todos' =>  $items]);
        } else {
            return redirect()->route('search-data-new')->with('status', 'We are sorry We cannot find any users who match your search criteria.');
        }
         //echo "<pre>";
       //print_r($name);
    }


}
