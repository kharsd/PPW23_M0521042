<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index ()
    {
        return view('login');
    }

    public function authenticate (Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            //jika success

            $role = Auth::user()->role_id; 
            switch ($role) {
                case '1':
                    return redirect()->intended('/product');
                    break;
                case '2':
                    return redirect()->intended('/dashboard');
                    break;
                default:
                    return redirect()->intended('/');
                    break;
            }
        }

        return back()->with('loginError', 'Login failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
