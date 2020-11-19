<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FinanceAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }

        //role 1 = admin
        if(Auth::user()->role == 1){
            return redirect()->route('admin');
        }

        // role 2 = manager
        if(Auth::user()->role == 2){

            return $next($request);

        }

        // role 3 = user
        if(Auth::user()->role == 3){
            return redirect()->route('user');

        }

           // role 4 = finance admin
           if(Auth::user()->role == 4){
            return $next($request);

        }
    }
}
