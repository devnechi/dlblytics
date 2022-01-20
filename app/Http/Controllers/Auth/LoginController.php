<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo(){

        switch (Auth::user()->role_id) {
            case 1:

                //role 1 = admin
                $this->redirectTo = '/admin';
                return $this->redirectTo;
                break;

            case 2:
                //role 2 = manager
                $this->redirectTo = '/manager';
                return $this->redirectTo;
             break;

            case 3:
                //role 3 = user
              $this->redirectTo = '/user';
              return $this->redirectTo;
              break;


            case 4:
                //role 4 = finance admin
                $this->redirectTo = '/finance-dashboard';
                return $this->redirectTo;
                break;

            case 5:
                //role 5 = mne
                $this->redirectTo = '/monitoring-evaluation-dashboard';
                return $this->redirectTo;
                break;

            case 6:
                //role 6 = cb-pillar-manager
                $this->redirectTo = '/cb-pillar-manager';
                return $this->redirectTo;
                break;

            case 7:
                //role 7 = is-pillar-manager
                $this->redirectTo = '/is-pillar-manager';
                return $this->redirectTo;
                break;

            case 8:
                //role 8 = ri-pillar-manager
                $this->redirectTo = '/ri-pillar-manager';
                return $this->redirectTo;
                break;

            case 9:
                //role 9 = ce-pillar-manager
                // $this->redirectTo = '/ce-pillar-manager';
                $this->redirectTo = '/ds-pillar-manager';
                return $this->redirectTo;
                break;

            case 10:
                //role 10 = ds-pillar-manager
                $this->redirectTo = '/ds-pillar-manager';
                return $this->redirectTo;
                break;

            case 11:
                //role 11 = research-innovation-dashboard
                $this->redirectTo = '/research-innovation-dashboard';
                return $this->redirectTo;
                break;

            case 12:
                //role 12 = capacity-building-dashboard
                $this->redirectTo = '/capacity-building-dashboard';
                return $this->redirectTo;
                break;


            case 13:
                //role 13 = institutional-strengthening-dashboard
                $this->redirectTo = '/institutional-strengthening-dashboard';
                return $this->redirectTo;
                break;


                case 14:
                    //role 14 = community-engagement-dashboard
                    $this->redirectTo = '/community-engagement-dashboard';
                    return $this->redirectTo;
                    break;


            case 15:
                //role 15 = data-science-dashboard
                $this->redirectTo = '/data-science-dashboard';
                return $this->redirectTo;
                break;


            case 16:
                //role 16 = communication-channels-dashboard
                $this->redirectTo = '/communication-channels-dashboard';
                return $this->redirectTo;
                break;


            case 17:
                //role 17 = dlab-donors-dashboard
                $this->redirectTo = '/dlab-donors-dashboard';
                return $this->redirectTo;
                break;


            case 18:
                //role 18 = members-area-dashboard
                $this->redirectTo = '/members-area-dashboard';
                return $this->redirectTo;
                break;


            default:
                # code...
                $this->redirectTo = '/login';
                return $this->redirectTo;
                break;
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
