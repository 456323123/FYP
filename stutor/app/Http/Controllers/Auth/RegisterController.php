<?php

namespace App\Http\Controllers\Auth;



use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Symfony\Component\HttpFoundation\Session\Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = '/message=pending&um_role=subscriber&um_form_id';

     protected function redirectTo()
    {
        if (Auth::user()->usertype == 'admin') {
            return 'dashboard';
        }

         elseif(Auth::User()->usertype == 'teacher')
        {
            return 'home';
        }

         elseif(Auth::User()->usertype == 'student')
        {
            return 'student/home';
        }



    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' =>['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10','unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'city' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'qualification' => ['required'],


        ]);


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' =>$data['phone'],
            'status' => false,
            'city' => ($data['city']),
             'usertype' => ($data['usertype']),
            'gender' => ($data['gender']),
            'address' => ($data['address']),
            'qualification' => ($data['qualification']),
            'password' => Hash::make($data['password']),
        ]);

           if(request()->hasfile('document')){
          $image = request()->file('document');
          $filename = time() . '.' . $image->getClientOriginalName();
          $movedFile = $image->move('uploads/document', $filename);
          $user->document = $filename;
          $user->save();
        }else {
            $user->save();
        }
return $user;
    }



    /**
     * Get the categories
     *
     */


}
