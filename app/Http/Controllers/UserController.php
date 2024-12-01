<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //    user lists page
    public function list()
    {
        $users = User::get();
        return view('users.user', compact('users'));
    }
}
