<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $user = DB::table('users')
            ->where('username', $username)
            ->first();

        if ($user && $user->password === $password) {
            Session::put('logged_in', true);
            Session::put('username', $user->username);
            Session::put('user_id', $user->id);
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['username' => 'Username atau password salah']);
    }

    public function dashboard()
    {
        if (!session('logged_in')) {
            return redirect()->route('login')->withErrors([
                'username' => 'Silakan login terlebih dahulu.'
            ]);
        }

        return view('dashboard');
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }
}