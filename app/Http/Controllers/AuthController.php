<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
        public function register(){
        return view('register/index');
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name'  => 'required|max:100',
            'email' => 'required',
            'password' => 'required'
        ]);

        $validData = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        );

        $user = User::create($validData);
        auth()->login($user);
        return redirect('home')->with('success', 'Hooray, Register successful!');
    }

    public function login(){
        return view('login/index');
    }

    public function login_action(Request $request)
    {
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];


        if(Auth::attempt($credentials)) {
            return redirect()->intended('home');       
        }

  
        return back()->withErrors('password');
    }

    public function home () {
        return view('layout/main');
    }

    public static function logout() {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('home');
    }
}
