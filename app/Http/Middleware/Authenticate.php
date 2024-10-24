<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // Check if the request is for an admin route
        if ($request->is('admin/*')) {
            // If the request is for an admin URL, redirect to the admin login page
            return route('admin.login');
        }

        // Default redirection for normal users to the regular login page
        return $request->expectsJson() ? null : route('login');
    }
}
