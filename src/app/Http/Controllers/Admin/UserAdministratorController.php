<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserAdministratorController extends Controller
{
    public function index() {
        $users = User::getActiveAdministratorAccounts();
        return view('admin.users.administrator', compact('users'));
    }
}
