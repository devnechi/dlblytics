<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class DataScience
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
        if(Auth::user()->role_id == 1){

            return redirect()->route('admin');
        }

        // role 2 = manager
        if(Auth::user()->role_id == 2){
            return redirect()->route('manager');
        }

        // role 3 = user
        if(Auth::user()->role_id == 3){
            return redirect()->route('user');
        }

        // role 4 = finance admin
        if(Auth::user()->role_id == 4){
            return redirect()->route('finance-dashboard');
        }
        // role 5 = mne
        if(Auth::user()->role_id == 5){
            return redirect()->route('monitoring-evaluation-dashboard');
        }

            //role 6 = cb-pillar-manager
            if(Auth::user()->rorole_idle == 6){
            return redirect()->route('cb-pillar-manager');


        }

        //role 7 = is-pillar-manager
        if(Auth::user()->role_id == 7){
            return redirect()->route('is-pillar-manager');


        }
        //role 8 = ri-pillar-manager
        if(Auth::user()->role_id == 8){
            return redirect()->route('ri-pillar-manager');


        }


        //role 9 = ce-pillar-manager
        if(Auth::user()->role_id == 9){
            return redirect()->route('ce-pillar-manager');
        }
        //role 10 = ds-pillar-manager
        if(Auth::user()->role_id == 10){
            return redirect()->route('ds-pillar-manager');
        }

        // Staff Roles and redirections
        //role 11 = ri-staff
        if(Auth::user()->role_id == 11){
            return redirect()->route('research-innovation-dashboard');

        }
        //role 12 = cb-staff
        if(Auth::user()->role_id == 12){
            return redirect()->route('capacity-building-dashboard');
        }
        //role 13 = is-staff
        if(Auth::user()->role_id == 13){
            return redirect()->route('institutional-strengthening-dashboard');
        }
        //role 14 = ce-staff
        if(Auth::user()->role_id == 14){
            return redirect()->route('community-engagement-dashboard');
        }
        //role 15 = ds-staff
        if(Auth::user()->role_id == 15){
            return $next($request);
        }

        //communication channels
        if(Auth::user()->role_id == 16){
            return redirect()->route('communication-channels-dashboard');
        }
        // donor area
        if(Auth::user()->role_id == 17){
            return redirect()->route('dlab-donors-dashboard');
        }

        //members dashboard
        if(Auth::user()->role_id == 18){
            return redirect()->route('members-area-dashboard');
        }

    }
}
