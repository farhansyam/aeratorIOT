<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get($user)
    {
        $user = User::whereName($user)->first();
        dd($user->name);
    }
}
