<?php

namespace App;
use App\Response;
use App\Course;
use App\Subject;
use App\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','usertype','status','city','gender','address','qualification','experience','intro','file',
    ];


public static function teacher_subject()
    {
        $usercart=User::where('id',Auth::user()->id);
   return $usercart;
    }


      public function subject()
{
    return $this->hasMany('App\Subject','user_id');
}

public static function usercart()
    {
        $usercart=Store::get()->toArray();
   return $usercart;
    }
   public function usercourse()
{
    return $this->hasMany('App\Store','user_id');
}

 public function section()
    {
        return $this->belongsToMany('App\Subject','user_id');
    }


public static function getname($user_id)
  {
$getname=User::select('name')->where('id',$user_id)->first();
return $getname->name;
  }

public static function getphone($user_id)
  {
$getphone=User::select('phone')->where('id',$user_id)->first();
return $getphone->phone;
  }

   public static function getcity($user_id)
  {
$getcity=User::select('city')->where('id',$user_id)->first();
return $getcity->city;
  }

  public static function id($user_id)
  {
$getid=User::select('id')->where('id',$user_id)->first();
return $getid->id;
  }





    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



}
