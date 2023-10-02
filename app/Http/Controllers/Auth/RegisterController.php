<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
class RegisterController extends Controller

{

    public function __construct()
    {
        $this->middleware('guest');
    }
    public function showRegistrationForm()
    {
        return view('Auth.register');
    }
    public function register(RegisterRequest $request){
        $user = new User();
        $user->nombre=$request->nombre;
        $user->apellido=$request->apellido;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();

        return redirect(route('login'));

    }
}
