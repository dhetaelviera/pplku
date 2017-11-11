<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

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
     */protected $redirectTo = '/home';
/**
    public function masuk(){


     
        if(Auth::user()->sebagai=='1'){
           protected $redirectTo = '/dashboardAgen';    
       } else if(Auth::user()->sebagai=='2'){
           protected $redirectTo = '/dashboardPengusaha';    
       } 
   }*/
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

}
