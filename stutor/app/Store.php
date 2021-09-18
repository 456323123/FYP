<?php

namespace App;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function course()
{
    return $this->belongsTo('App\Course','cours_name')->select('id','name');
}

public static function usercart()
    {
        $usercart=Store::where('user_id',Auth::user()->id)->get()->toArray();
   return $usercart;
    }


    public static function teacher_subject()
    {
        $usercart=User::where('id',Auth::user()->id);
   return $usercart;
    }
}
