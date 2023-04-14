<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{

    function __construct(){

    }
    public function __invoke()
    {
        return view("index");
    }
}
