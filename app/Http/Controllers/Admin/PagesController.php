<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $title = 'dashboard';
        return view('pages.home', [
            'title' => $title
        ]);
    }

    public function activityPlanner()
    {
        $title = 'activity planner';
        return view('pages.calender',[
            'title' => $title
        ]);
    }

    public function calender()
    {
        $title = 'calender';
        return view('pages.admin.calender',[
            'title' => $title
        ]);
    }
    
    public function settings()
    {
        $title = 'settings';
        return view('pages.admin.settings',[
            'title' => $title
        ]);
    }

    public function profile()
    {
        $title = 'profile';
        return view('pages.admin.profile',[
            'title' => $title
        ]);
    }

    public function routes()
    {
        return view('pages.routes');
    }

}
