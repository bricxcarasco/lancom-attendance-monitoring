<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Constant;

class LoginController extends Controller
{
    public function index() 
    {
        return view('login');
    }

    public function homeRedirect() 
    {
        return redirect('login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_delete' => 0])) {
            $auth = Auth::user();
            if ($auth->is_active === 0) {
                if($auth->user_type == 1)
                    return redirect()->route('admin.dashboard');
                elseif ($auth->user_type == 2)
                    return redirect()->route('teacher.dashboard');
                elseif ($auth->user_type == 3)
                    return redirect()->route('student.dashboard');
            } else {
                return redirect()->route('login.page')->with('error', Constant::ACCOUNTS['INACTIVE_ACCOUNT']);
            }
        } else {
            return redirect()->route('login.page')->with('error', Constant::ERROR_UNAUTHORIZED);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
