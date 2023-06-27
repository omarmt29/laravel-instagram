<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
    
    protected function authenticated(Request $request, $user)
    {
        // Lógica adicional después de que el usuario se autentique
        if ($user->role == 'admin') {
            return redirect()->route('admin');
        } else {
            return redirect()->route('user');
        }
    }
}