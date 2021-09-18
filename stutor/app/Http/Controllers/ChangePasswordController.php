<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  Session::put('page','password');
        return view('layouts.admin_layout.profile.changePassword');
    }


     public function student()
    {  Session::put('page','password');
        return view('teacher.changePassword');
    }
     public function back()
    {
        return view('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
$request->session()->flash('success', 'Your password is updated');
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
return redirect('/password-updated');
       // dd('Password change successfully.');
         // $request->session()->flash('success', 'Your password is updated');

    }


    public function updatepass(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
$request->session()->flash('success', 'Your password is updated');
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
return redirect('password/chanage');
       // dd('Password change successfully.');
         // $request->session()->flash('success', 'Your password is updated');

    }


}
