<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
			//je verifie si la requete est en mode super admin
		 	if($request->isSuperAdminUrl()){

				if (! $request->expectsJson()) {
					return route('superAdmin.login');
				}
			}elseif ($request->isAdminUrl()){
				if (! $request->expectsJson()) {
					return route('admin.login');
				}
			}else{
				if (! $request->expectsJson()) {
					return route('login');
				}
			}

    }
}
