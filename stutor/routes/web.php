<?php
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/','/index');
Route::get('/message=pending&um_role=subscriber&um_form_id', function () {
    return view('welcome');
});
// Route::get('/send-mail',function()
// {
// $details=[
// 'tile'=>'Mail from server side',
// 'body'=>'this is inform testing mail'
// ];
// //dd($details);
// Mail::to('tk705352@gmail.com')->send(new \App\Mail\TestMail($details) );
// echo 'mail is send';
// });
Route::get('/back','ChangePasswordController@back')->name('back');
Auth::routes();
//password rest routes
Route::get('password-updated', 'ChangePasswordController@index')->middleware('teacher');
Route::get('/user/respon', 'UserController@Responsechat')->middleware('teacher');
Route::get('/index', 'UserController@index');
Route::get('/about-us', 'UserController@Abountus');
Route::get('/teacher-register', 'UserController@Register');
Route::get('/contact-us', 'UserController@contact');
Route::get('/user/message', 'UserController@Message')->middleware('teacher');
Route::post('password-updated', 'ChangePasswordController@store')->name('change.password')->middleware('teacher');;;

Route::get('/home', 'HomeController@home')->middleware('teacher');
Route::post('/post', 'UserController@updatepost')->name('User.updatepost');
Route::get('profilenew', 'UserController@profilenew')->middleware('teacher');
Route::get('course', 'UserController@course')->middleware('auth');
Route::get('/show', 'UserController@showdata');
Route::get('/show-teachers', 'UserController@showdatanew');
Route::post('profilenew', 'UserController@update_avatar_new');
Route::get('/edit/user/', 'UserController@Edit');
Route::post('/update/user/', 'UserController@Update')->name('User.update');
Route::post('/user/subject/append','SubjectController@appensubject');
// // Route::get('/edit/password/', 'UserController@passwordedit')->name('password.edit');;
// Route::post('/update/password/', 'UserController@changepassword');
Route::get('/show/{id}', 'UserController@showmoredata');
Route::any('/show-teachers/{id}', 'UserController@showmornewedata');
//responses chat
Route::get('/response', 'UserController@Responsechat');
Route::get('/show', 'UserController@search');
Route::post('/show-teachers', 'UserController@searchnew')->name('search-data-new')->middleware('teacher');
Route::view('new','admin_dashboard');
 Route::post('/subject', 'SubjectController@stepnew')->name('User.step');
 Route::get('/add/new/subject', 'SubjectController@stepnewshow');
Route::get('/subject-show', 'SubjectController@stepnviewuser');
Route::get('/showuserdetail', 'UserController@showuserdetail');
 Route::get('/subject-delete/{id}', 'SubjectController@subjectdelete');
Route::group(['middleware' => ['admin']], function () {


    Route::get('/dashboard', function () {

        return view('admin.dashboard');
    });

    Route::get('/role-register', 'Admin\DashboardController@register');
    Route::get('/delete/{id}', 'Admin\DashboardController@delete');
    Route::get('/role-edit/{id}', 'Admin\DashboardController@registeredit');
    Route::PUT('/role-register-update/{id}', 'Admin\DashboardController@registerupdate');
    Route::get('/status/{id}', 'Admin\DashboardController@status')->name('status');
    Route::post('/role-register', 'Admin\DashboardController@search')->name('sources-index');
    ///subject
     Route::match(['get','post'], '/add-subject', 'Admin\DashboardController@addsubject');
      Route::get('/subjects', 'Admin\DashboardController@subjects');
            Route::get('/subjects-postdata', 'Admin\DashboardController@datapostsubjectcourst');


    Route::get('/subject/delete/{id}', 'Admin\DashboardController@deletecoursesubject')->name('delete');
        Route::get('document/{file}', 'Admin\DashboardController@downloadcv');

});

//student
Route::get('password/chanage', 'ChangePasswordController@student')->middleware('student');
Route::post('password-chanage', 'ChangePasswordController@updatepass')->name('change.password.new')->middleware('student');;;

Route::prefix('student')->name('student.')->middleware(['student'])->namespace('Student')->group(function() {
Route::get('/response', 'StudentController@Responsechat');


    Route::get('/home', 'StudentController@home');
Route::get('profile', 'StudentController@profilenew')->name('profile');
Route::get('message', 'StudentController@Message');
Route::post('/show-teachers', 'StudentController@searchnew');


});
