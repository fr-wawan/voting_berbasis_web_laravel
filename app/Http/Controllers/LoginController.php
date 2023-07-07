<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index()
  {

    return view('auth.login');
  }

  public function auth(Request $request)
  {
    $credentials = $request->validate([
      'email' => 'required',
      'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      if (auth()->user()->is_admin) {
        return redirect('/dashboard');
      }

      return redirect('/voting');
    }

    return back()->with('failed', 'Login failed!');
  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
  }
}
