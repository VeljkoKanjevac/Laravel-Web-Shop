<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function allUsers()
    {
        $allUsers = User::all();

        return view('admin.users.all', compact('allUsers'));
    }

    public function deleteUser(User $user)
    {
        $user->delete();

        return redirect()->back();
    }
}
