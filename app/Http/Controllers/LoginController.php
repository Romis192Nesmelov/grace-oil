<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate(['email' => 'required|email','password' => 'required']);
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials, $request->remember == 'on')) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.home'));
        } else return back()->withErrors(['email' => trans('auth.failed')]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
