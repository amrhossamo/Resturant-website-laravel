<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LimitedAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle($request, Closure $next)
    {
        // Get the current controller and action
        $controller = class_basename($request->route()->getController());
        $action = $request->route()->getActionMethod();

        // Define allowed functions for each controller
        $allowedFunctions = [
            'BookingsController' => ['store', 'show', 'create','index'],
            'ItemsController' => ['functionA', 'functionB'],
        ];

        // Check if the current controller and action are allowed
        if (isset($allowedFunctions[$controller]) && in_array($action, $allowedFunctions[$controller])) {
           
             return $next($request);
        }

        // User doesn't have permission
        return abort(403, 'You Dont Have permistion to this page');
    }
}
