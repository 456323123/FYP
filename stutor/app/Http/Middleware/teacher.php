<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class teacher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    { if (!Auth::guest() && Auth::User()->usertype == 'teacher' )
        {
                    if(Auth::User()->status == '1' && Auth::User()->usertype == 'teacher')
              {
                              return $next($request);
              }

                 else
                  {
                return redirect()->route('back');
                   }


        }


               return redirect()->back();


    }
}
