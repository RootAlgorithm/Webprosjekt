<?php
/**
 * Created by PhpStorm.
 * User: Talimere
 * Date: 20/05/17
 * Time: 22.49
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class VerifyAdmin
{
    public function handle($request, Closure $next, $guard = null)
    {
        if((Auth::guard($guard)->guest()) || (Auth::guard($guard)->user()->admin == false))
        {
            return view('main');
        }

        return $next($request);
    }
}