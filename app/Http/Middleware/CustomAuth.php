<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        //echo"hi hello";
 $path=$request->path();

 if(($path=="login" ||  $path=="register")   &&  Session::get('user'))
        {
            return redirect('/');        //after login ,user can access only HOME,ADD LIST,NOT ABLE TO SEE LOGIN PAGE AND REGISTER PAGE 
        }


else if(($path!="login"  &&   !Session::get('user')) && ($path!="register"   &&   !Session::get('user')))
       {
            return redirect('/login');       //if not login ,then not able to access other page like add list home.
       }
     



     if($path=="login"  && Session::get('user'))
     {
        return redirect('session/remove');
     }

   return $next($request);
    }
}

