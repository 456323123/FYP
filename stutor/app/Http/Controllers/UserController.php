<?php

namespace App\Http\Controllers;

use App\User;
use App\Subject;
use App\Response;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;


class UserController extends Controller
{


public function index()
{
    $index="index";
    return view('layouts.Front.Front_layout')->with(compact('index'));
}

    public function contact()
{

    return view('layouts.Front.front_contact');
}


    public function Abountus()
{
    $contact="contact";
    return view('layouts.Front.front_about_us');
}

    public function Register()
{
    $contact="contact";
    return view('layouts.Front.register');
}

    public function profile()
    {
        return view('profile', array('user'=> Auth::user()));
    }
    public function profilenew()
    { Session::put('page','profile');
        return view('layouts.admin_layout.profile.profilenew', array('user' => Auth::user()));
    }

  public function course()
    {  Session::put('page','course');
        return view('layouts.admin_layout.profile.courses', array('user' => Auth::user()));
    }

    public function Edit()
    {
        if (Auth::user()) {
            # code...
            $user=User::find(Auth::user()->id);

            if($user)
            {
            return view('profile')->withUser($user);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

    }





    public function showdatanew()
    {


        $users = User::latest()->paginate(5);
        return view('layouts.admin_layout.profile.showdata')->with('todos', $users);
    }

public function showmoredata($id)
    {   //echo "text";die;
         $todo=User::with('usercourse')->find($id);
  $todo=json_decode(json_encode($todo),true);
    //echo "<pre>"; print_r($todo);die;
    // sendMail([
    //         'view' => 'emails.user_status_pending',
    //         'to' => $status->email,
    //         'subject' =>  'Your Account is activated by admin Successfully',
    //         'name' => $status->name,
    //         'data' => ['user'=>$status]
    //     ]);
        return view('moreshow')->with('todos', $todo);



    }
 public function showdata()
    {
    //    $d= Subject::with('khan');
    //    dd($d);
      $todos = User::with('usercourse')->where('status',1)->orderBy('id','desc')->paginate(20);
        //dd($todos);
         //  echo "<pre>"; print_r($todos);die;
        return view("showdata")->with(compact('todos'));
    }


    public function showmornewedata(Request $request,$id)
    {

        $todo = User::find($id);
        if($request->isMethod('post'))
        {
            $data=$request->all();
                     //  echo "<pre>"; print_r($data);die;
// echo $id;
// echo $todo->name;
// echo "<br>";
// echo Auth::user()->name;
// echo Auth::user()->id;

$responses=new Response;
$responses->sender_id=Auth::user()->id;
$responses->receiver_id=$id;
$responses->message=$data['message'];
$responses->seen=0;
$responses->save();
return redirect()->back()->with('status','your Response has been sent');
        }

        return view('layouts.admin_layout.profile.showmore')->with('todos', $todo);

    }


  public function Responsechat()

     {
         Session::put('page','response');
            $Appointment=Auth::user()->id;
            $Appointment=Response::where('receiver_id',$Appointment)->get();
            //$Appointment=json_decode(json_encode($Appointment));

          //  echo "<pre>"; print_r($Appointment);die;
            return view('layouts.admin_layout.profile.chat')->with(compact('Appointment'));
     }

     public function Message()

     {
         Session::put('page','message');
            $sender_id=Auth::user()->id;
            $Appointment=Response::where('sender_id',$sender_id)->get();
            //$Appointment=json_decode(json_encode($Appointment));

          // echo "<pre>"; print_r($Appointment);die;
            return view('layouts.admin_layout.profile.message')->with(compact('Appointment'));
     }

//user update data
    public function Update(Request $request)
        {
        $user = User::find(Auth::user()->id);
 if ($request->phone != $user->phone) {
           $request->validate([
              'phone' =>'required|unique:users',
            ]);
        }
if ($user) {
    $validate=null;
    if (Auth::user()->email === $request['email']) {
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'email' => 'required|email',
                     'phone' => 'required|min:2',
                    'city' => 'required',
                     'address' => 'required|min:2',

                ]);

    } else {
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'email' => 'required|email|unique:users',
                     'phone' => 'required|min:2',
                    'city' => 'required',
                     'address' => 'required|min:2',

                ]);
            }

if ($validate) {
                # code...
                $user->name = $request['name'];
                $user->email = $request['email'];
                $user->phone = $request['phone'];
                $user->address = $request['address'];
                $user->city = $request['city'];
                $user->save();
                $request->session()->flash('error_message','Your Details now have been Updated');
                return redirect()->back();
}else {
                return redirect()->back();
}

}
else {
            return redirect()->back();
}

    }





//     public function Updatepost(Request $request)

//         {
//         $user = User::find(Auth::user()->id);
//                    $user->english=$request['english'];
//                    $user->urdu=$request['urdu'];
//                 $user->save();
//                 $request->session()->flash('error_message','Your Details now have been Updated');
//                 return redirect()->back();
// }





    public function search(Request $request)
    {
$validate=null;


        $address = $request->get('address');
    $city = $request->get('city');
   $items = User::with('usercourse')->where([
        ['address', 'LIKE', '%' . $address . '%'],
        ['city', 'LIKE', '%' . $city . '%'],
    ])
            ->when(request('subject_name'), function($query) {
                return $query->whereHas('usercourse', function($q) {
                    $q->where([
                        ['subject_name','like' ,'%'.request('subject_name').'%']
                        ]);


                });
            })

            ->latest()
            ->paginate();





            return view('showdata', ['todos' =>  $items]);



        // else {

        //     return redirect()->back()->with('status', 'We are sorry We cannot find any users who match your search criteria.');
        // }

         //echo "<pre>";
       //print_r($name);
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
            return view('layouts.admin_layout.profile.showdata', ['todos' =>  $items]);
        } else {
            return redirect()->route('search-data-new')->with('status', 'We are sorry We cannot find any users who match your search criteria.');
        }
         //echo "<pre>";
       //print_r($name);
    }


    // public function changepassword(Request $request)
    // {
    //     $validate = $request->validate([
    //         'oldPassword' => 'required|min:6',
    //         'password' => 'required|min:6|required_with:password_confirmation',

    //     ]);
    //     $user = User::find(Auth::user()->id);
    //     if ($user) {
    //         if (Hash::check($request['oldPassword'], $user->password) && $validate) {
    //             $user->password = Hash::make($request['password']);
    //             $user->save();
    //             $request->session()->flash('success', 'Your password is updated');
    //             return redirect()->back();
    //         } else {
    //             $request->session()->flash('error_message', 'Your current password did not match');
    //             return redirect()->route('password.edit');
    //         }
    //

// }









    // public function passwordedit()
    // {
    //     Session::put('page','password');
    //     if (Auth::user()) {
    //         return view('layouts.admin_layout.profile.password', array('user' => Auth::user()));
    //         return redirect()->back();
    //     } else {
    //         return redirect()->back();
    //     }
    // }

    public function update_avatar(Request $request)
    {

        // Handle the user upload of avatar
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();

        }
        return view('profile',array('user'=>Auth::user()));
    }

    public function update_avatar_new(Request $request)
    {

        // Handle the user upload of avatar
        // if ($request->hasFile('avatar')) {
        //     $avatar = $request->file('avatar');
        //     $filename = time() . '.' . $avatar->getClientOriginalExtension();
        //     Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

        //     $user = Auth::user();
        //     $user->avatar = $filename;
        //     $user->save();
        // }
     $user = Auth::user();
          if(request()->hasfile('avatar')){
          $image = request()->file('avatar');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $movedFile = $image->move('uploads/avatars/', $filename);

            $user->avatar = $filename;
            $user->save();
        }else {
            $user->save();
        }


        // $filename  = public_path('uploads/avatars/').$user->avatar;
        // // dd($filename);
        // if (File::exists($filename)) {
        //     if (request()->hasfile('avatar')) {
        //         $avatar = $request->file('avatar');
        //         $filename_new = time() . '.' . $avatar->getClientOriginalExtension();
        //         Image::make($avatar)->resize(300, 300)->move(public_path('/uploads/avatars/' . $filename_new));

        //         $user = Auth::user();
        //         $user->avatar = $filename_new;
        //         $user->save();
        // unlink($filename);

        //     }
        //     else
        //     {
        //          $user->save();
        //     }

        return view('layouts.admin_layout.profile.profilenew', array('user' => Auth::user()));
    }


    public function google(Request $request)
    {
        return view('google');
    }
}

