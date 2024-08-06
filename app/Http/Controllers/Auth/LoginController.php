<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => __('auth.failed'),
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {    
        Auth::guard()->logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return response()->json(['message' => 'Logged out'], 200);
    }
}
