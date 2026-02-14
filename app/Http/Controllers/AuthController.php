<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
      return view('auth.register');
    }

    public function register(Request $request){
      $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
      ]);

      User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
      ]);

        return back()->with('success', 'Konto utworzone. Możesz się zalogować');

    }

    public function showLogin(){

      return view('auth.login');
    }

    public function login (Request $request){
        $credentials = $request->validate([
          'email' => 'email|required',
          'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
          $request->session()->regenerate();
          return redirect('/codes');
        }

        return back()->with('error', 'Nieprawidłowe dane logowania');
    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
