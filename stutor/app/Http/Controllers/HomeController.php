<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//     {
//         $this->middleware('guest');
//     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        Session::put('page','home');
        $users = User::paginate(5);
        return view('layouts.admin_layout.profile.showdata')->with('todos', $users);
    }
}
