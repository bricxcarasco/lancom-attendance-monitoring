<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Helpers\Constant;
use App\User;

class UserTeacherController extends Controller
{
    public function index()
    {
        $users = User::getActiveTeacherAccounts();
        return view('admin.users.teacher', compact('users'));
    }
    
    public function getUser($id)
    {
        try {
            $user = User::find($id);
            Log::info(['GET ACCOUNT' => $user]);
            return $user;
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->route('admin.users.teacher.index')->with('error', Constant::ERROR_SERVER);
        }
    }

    public function add(Request $request)
    {
        $request->merge([
            'password' => Hash::make($request->password),
            'user_type' => 2
        ]);

        try {
            User::create($request->all());
            Log::info($request->all());
            return redirect()->route('admin.users.teacher.index')->with('success', Constant::ACCOUNTS['ADDED']);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->route('admin.users.teacher.index')->with('error', Constant::ERROR_SERVER);
        }
    }

    public function edit(Request $request)
    {
        try {
            $user = User::find($request->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->birthdate = $request->birthdate;
            $user->address = $request->address;
            $user->contact = $request->contact;
            $user->save();
            Log::info(['EDIT ACCOUNT' => $request->all()]);
            return redirect()->route('admin.users.teacher.index')->with('success', Constant::ACCOUNTS['UPDATED']);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->route('admin.users.teacher.index')->with('error', Constant::ERROR_SERVER);
        }
    }

    public function changePassword(Request $request)
    {
        try {
            $user = User::find($request->id);
            $user->password = Hash::make($request->password);
            $user->save();
            Log::info(['CHANGE ACCOUNT PASSWORD' => $request->all()]);
            return redirect()->route('admin.users.teacher.index')->with('success', Constant::ACCOUNTS['CHANGED_PASSWORD']);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->route('admin.users.teacher.index')->with('error', Constant::ERROR_SERVER);
        }
    }

    public function enable(Request $request)
    {
        try {
            $user = User::find($request->id);
            $user->is_active = 0;
            $user->save();
            Log::info(['ENABLE ACCOUNT' => $request->all()]);
            return redirect()->route('admin.users.teacher.index')->with('success', Constant::ACCOUNTS['ENABLED']);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->route('admin.users.teacher.index')->with('error', Constant::ERROR_SERVER);
        }
    }

    public function disable(Request $request)
    {
        try {
            $user = User::find($request->id);
            $user->is_active = 1;
            $user->save();
            Log::info(['DISABLE ACCOUNT' => $request->all()]);
            return redirect()->route('admin.users.teacher.index')->with('success', Constant::ACCOUNTS['DISABLED']);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->route('admin.users.teacher.index')->with('error', Constant::ERROR_SERVER);
        }
    }

    public function delete(Request $request)
    {
        try {
            $user = User::find($request->id);
            $user->is_delete = 1;
            $user->save();
            Log::info(['DELETE ACCOUNT' => $request->all()]);
            return redirect()->route('admin.users.teacher.index')->with('success', Constant::ACCOUNTS['DELETED']);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->route('admin.users.teacher.index')->with('error', Constant::ERROR_SERVER);
        }
    }
}
