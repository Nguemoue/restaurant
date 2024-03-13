<?php

	if(!function_exists("adminUrl")){
		function adminUrl(){
			return config("url.admin");
		}
	}

	if(!function_exists("superAdminUrl")){
		function superAdminUrl(){
			return config("url.superAdmin");
		}
	}

	if(!function_exists("webAuth")){
		function webAuth(): \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Auth\Factory
		{
			return auth(config('misc.guard.web'));
		}
	}

	if(!function_exists('superAdminAuth')){
		function superAdminAuth(){
			return auth(config('misc.guard.superAdmin'));
		}
	}

	if(!function_exists("adminAuth")){
		function adminAuth(){
			return auth(config("misc.guard.admin"));
		}
	}
