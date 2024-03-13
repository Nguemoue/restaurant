<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index()
    {
    		$auth = auth('web')->user();
			return view("web.dashboard.pages-account-settings-account",[
				'auth'=>$auth
			]);
    }
}
