<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function showRegister(): View
    {
      return view('auth.register');
    }

    public function register(Request $request): RedirectResponse
    {
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
      
        return redirect()->route('auth.login.form');
    }

    public function showLogin(): View
    {
      return view('auth.login');
    }

    public function login (Request $request): RedirectResponse
    {
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

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
