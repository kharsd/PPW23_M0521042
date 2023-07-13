<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Unique;

class RegisterController extends Controller
{
    public function index (){
        return view('register');
    }

    public function store (Request $request) {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        User::create($validateData);       
        return redirect('/login');
    }
}
