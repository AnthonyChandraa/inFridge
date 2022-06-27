<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexLanding(){
        return view('landing.start');
    }

    public function indexDashboard(){
        return view('content.dashboard');
    }


}
