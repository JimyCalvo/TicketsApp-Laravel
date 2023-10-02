<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('Auth.login');
    }

    public function login(LoginRequest $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        return back()->withErrors(['email' => 'Estas credenciales no coinciden con nuestros registros']);
    }
}
