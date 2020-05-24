<?php

namespace App\Http\Middleware;

use App\Models\Vehicles;
use Closure;

class CheckNumber
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $parameter = $request->route()->parameter('number');

        if (
            $parameter &&
            !(Vehicles::where('number', $parameter)->first())
        ) {
            abort(404);
        }

        return $next($request);
    }
}
