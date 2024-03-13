<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class WebDashboardController extends Controller
{
    public function index()
    {
    	 return view('web.dashboard');
    }
}
