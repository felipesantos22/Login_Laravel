<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function index()
    {
        return view('home');
    }

    /**
     * Handle an authentication attempt.
     */
    public function auth(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }else{
            dd("Não Logou");
        }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
    }
}