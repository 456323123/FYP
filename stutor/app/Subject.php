<?php

namespace App;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public static function usercart()
    {
        $usercart=Subject::where('user_id',Auth::user()->id)->get()->toArray();
   return $usercart;
    }

    public function jnb()
    {
return $this->belongsTo(User::class);
    }



}
