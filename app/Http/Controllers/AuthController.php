<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        if ($request->username === 'admin' && $request->password === 'admin') {
            return redirect()->route('siswa.dashboard');
        }

        return back()->with('error', 'Username atau password salah');
    }
}
