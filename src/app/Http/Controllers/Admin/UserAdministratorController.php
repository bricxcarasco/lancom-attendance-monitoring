<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Helpers\Constant;
use App\User;

class UserAdministratorController extends Controller
{
    public function index()
    {
        $users = User::getActiveAdministratorAccounts();
        return view('admin.users.administrator', compact('users'));
    }

    public function add(Request $request)
    {
        $request->merge([
            'password' => Hash::make($request->password),
            'user_type' => 1
        ]);

        try {
            User::create($request->all());
            Log::info($request->all());
            return redirect()->route('admin.users.administrator.index')->with('success', Constant::ACCOUNTS['ADDED']);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->route('admin.users.administrator.index')->with('error', Constant::ERROR_SERVER);
        }
    }
}
