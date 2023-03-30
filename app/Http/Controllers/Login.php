<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class Login extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login | SMA Islam Parlaungan',
            'navactive' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|max:20',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->put('username', $request->username);
            return redirect()->intended('/dashboard');
        }else{
            return back()->with('gagal', 'Username atau Password salah!'); 
        }
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->forget('username');
        $request->session()->forget('status');
        $request->session()->forget('walas');
        return redirect()->intended('/');
    }

    public function dashboard(Request $request)
    {
        return view('dashboard', [
            'title' => 'Dashboard Sikarjo',
            'navactive' => 'dashboard'
        ]);
    }
}
