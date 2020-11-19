<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CapacityBuilding
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
            return redirect()->route('manager');
        }

        // role 3 = user
        if(Auth::user()->role == 3){
            return redirect()->route('user');
        }

        // role 4 = finance admin
        if(Auth::user()->role == 4){
        return redirect()->route('finance-dashboard');
        }

        // role 5 = mne
        if(Auth::user()->role == 5){
            return redirect()->route('monitoring-evaluation-dashboard');
        }

        // role 6 = cb admin
        if(Auth::user()->role == 6){
            return $next($request);


        }
    }
}
