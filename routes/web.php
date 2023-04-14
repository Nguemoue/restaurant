<?php


use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsAndConditionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', HomeController::class)->name("home");

    route('elfinder.tinymce5');
    
    # route for service
    Route::view("service","service")->name("service");
    #route for about
    Route::view("about","about")->name("about");
    Route::view("contact","contact")->name("contact");
    Route::view("menu", "menu")->name("menu");
    Route::view("booking", "booking")->name("booking");
    Route::view("team", "team")->name("team");
    Route::view("testimonial", "testimonial")->name("testimonial");
    
    #for privacy policy
    Route::get("privacy",PrivacyPolicyController::class)->name("privacy");
    #for terms and conditions
    Route::get("terms-and-conditions",TermsAndConditionController::class)->name("terms");
    
    #dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
