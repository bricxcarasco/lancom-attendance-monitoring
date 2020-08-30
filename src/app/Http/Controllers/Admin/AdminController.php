<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }

    public function profile() {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        if (!is_null($request->image_upload)) {
            $imageName = time().'.'.request()->image_upload->getClientOriginalExtension();
            request()->image_upload->move(public_path('images'), $imageName);
            $request->merge(['image' => $imageName]);
        }

        try {
            $userUpdated = User::where('id', $request->id)->update($request->except(['id', 'image_upload', '_token']));
            if ($userUpdated) {
                return redirect()->back()->with('success', Constant::PROFILE_UPDATED);
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->back()->with('error', Constant::ERROR_SERVER);
        }
    }
}
