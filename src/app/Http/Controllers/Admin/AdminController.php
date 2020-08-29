<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }

    public function profileUpdate(Request $request)
    {
        $user = Auth::user();

        if (!is_null($request->image_upload)) {
            $imageName = time().'.'.request()->image_upload->getClientOriginalExtension();
            request()->image_upload->move(public_path('images'), $imageName);
            $request->merge(['image' => $imageName]);
        }

        User::where('id', $request->id)->update($request->except(['id', 'image_upload', '_token']));

        return redirect()->back();
    }
}
