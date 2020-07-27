<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function verify(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if(Auth::user()->type == 0) {
                return redirect()->route('admin.dashboard');
            }
            
            return redirect()->route('user.dashboard');
        } else {
            return redirect()->route('user.login')->with('error', 'invalid username or password');
        }
    }
}
