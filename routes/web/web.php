<?php


use App\Http\Controllers\Dashboard\AccountController as DashboardAccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsAndConditionController;
use App\Http\Controllers\Web\WebDashboardController;
use Illuminate\Support\Facades\Route;

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

Route::group([
	"prefix" => LaravelLocalization::setLocale(),
	"middleware" => ["localeViewPath","localize","localeSessionRedirect","localizationRedirect"]
],function (){
	Route::get('/', HomeController::class)->name("home");
	# route for service
	Route::view("service", "service")->name("service");
	#route for about
	Route::view("about", "about")->name("about");
	Route::view("contact", "contact")->name("contact");
	Route::get("menu", [\App\Http\Controllers\metier\MenuController::class,"index"])->name("menu");
	Route::view("booking", "booking")->name("booking");
	Route::view("team", "team")->name("team");
	Route::view("testimonial", "testimonial")->name("testimonial");

	#for privacy policy
	Route::get("privacy", PrivacyPolicyController::class)->name("privacy");
	#for terms and conditions
	Route::get("terms-and-conditions", TermsAndConditionController::class)->name("terms");

	#dashboard
	Route::get('/dashboard',[WebDashboardController::class,"index"])
		->middleware(['auth:web'])->name('dashboard');


	/*
	 * Route qui concerne le dashboard
	 */
		Route::group([
			'as' => "dashboard.",
			"middleware" => ["auth:web"],
			'prefix'=>"dashboard/"
		],function (){
			Route::get("account-settings",[DashboardAccountController::class,"index"])
			->name("account-setting.index");
		});
	/*
	 * Fin de route pour le dashboard
	 */
	require __DIR__ . '/auth.php';

});
