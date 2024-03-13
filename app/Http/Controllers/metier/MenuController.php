<?php

namespace App\Http\Controllers\metier;

use App\Http\Controllers\Controller;
use App\Models\CategoriePlat;
use App\Models\Plat;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request)
    {
    	//je cree une collection de plats
		 $categoriePlats = CategoriePlat::query()->with("plats")->get();

		 return view("menu",[
        	"categoriePlats"=>$categoriePlats
		  ]);
    }
}
