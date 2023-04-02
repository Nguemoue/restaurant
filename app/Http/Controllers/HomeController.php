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
        dd(File::glob(resource_path("views/\^i\.blade.php")));
        $result = Cache::add("users",File::g,now()->addDay());
        dd($result);
        return view("index");
    }
}