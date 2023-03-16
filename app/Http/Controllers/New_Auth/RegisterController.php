<?php

namespace App\Http\Controllers\New_Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegisterPage()
    {
        return view('auth.register');
    }
    
}
