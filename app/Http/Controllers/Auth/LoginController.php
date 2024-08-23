<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->intended('products');
        }
        return redirect()->route('login')
                         ->withErrors(['email' => 'Invalid credentials'])
                         ->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

