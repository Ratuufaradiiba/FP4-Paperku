<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use GrahamCampbell\ResultType\Success;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Request;

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

    use AuthenticatesUsers; // Untuk menghandle Login berdasarkan ROLE
    protected function authenticated() // ketika user berhasil login, return
    {
        if (auth()->user()->role === 'admin') {
            return redirect('/admin')->with('success', 'Anda telah berhasil login');
        } else {
            return redirect('/')->with('success', 'Anda telah berhasil login');
        }
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = 'backend';
    // setelah login ^diatas^ harusnya ke dashboard

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
