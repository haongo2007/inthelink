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
        $login = 'login';
        if ($request->is('supplier/*') || $request->is('supplier')) {
            $login = 'supplier.login';
        }elseif($request->is('influencer/*' || $request->is('influencer'))){
            $login = 'influencer.login';
        }elseif($request->is('admin/*' || $request->is('admin'))){
            $login = 'admin.login';
        }
        if (! $request->expectsJson()) {
            return route($login);
        }
    }
}
