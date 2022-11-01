<?php

namespace App\Http\Controllers\Users\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Auth extends Controller
{
    public static function authorization() {
        return view('users.auth.authorization');
    }

    public static function registration() {
        return view('users.auth.registration');
    }
}
