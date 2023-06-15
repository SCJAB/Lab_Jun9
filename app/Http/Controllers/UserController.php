<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index()
    // {
    //     
    //     return view('user.user', ['user' => $data]);
    // }

    public function index()
    {
        $user = new User;
        $users = user::all();
        return $users;
        // return User::all();
    }

    public function show($id)
    {
        return User::find($id);
    }
}
