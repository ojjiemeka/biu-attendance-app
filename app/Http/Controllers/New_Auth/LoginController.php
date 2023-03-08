<?php

namespace App\Http\Controllers\New_Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginPage()
    {
        return view('auth.login');
    }
}
