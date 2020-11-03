<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo(){
        
        
        // User role
        $role = Auth::user()->userRole; 
         
        // Check user role
        switch ($role) {
            case '1':
                    return '/admin_home';
                break;
            case '2':
                    return '/ch_home';
                break;
                
            case '3 ':
                    return '/cm_home'; 
                break;
            case '4 ':
                    return '/st_home'; 
                break;
            case '5':
                return '/ad_home'; 
            break;  

            case '6':
                    return '/jr_home'; 
                break;
              
        }
    }
}
