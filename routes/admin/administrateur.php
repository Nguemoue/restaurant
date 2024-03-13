<?php

use Illuminate\Support\Facades\Route;

Route::group(
	[
		"middleware" => ["localizationRedirect", "localize", "localeSessionRedirect", "localeViewPath"],
		'domain' => adminUrl(),
		"as" => "admin.",
		"prefix" => LaravelLocalization::setLocale()

	], function () {

	Route::get('/', function () {
		return 'Admin Page';
	})->middleware("auth:admin");

	Route::middleware(["guest:superAdmin"])->group(function () {
		/**
		 * Route pour les page de connexions et autres
		 */
		Route::get("/login", [App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, "create"])->name("login");
		Route::post("/login", [App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, "store"])->name("login");
	});


});
require __DIR__.'/auth.php';
