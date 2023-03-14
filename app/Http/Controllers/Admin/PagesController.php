<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function activityPlanner()
    {
        return view('pages.calender');
    }

    public function calender()
    {
        return view('pages.admin.calender');
    }
    
    public function settings()
    {
        return view('pages.admin.settings');
    }

    public function profile()
    {
        return view('pages.admin.profile');
    }

    // public function ()
    // {
    //     return view('');
    // }

}
