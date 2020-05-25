<?php

namespace App\Http\Middleware;

use App\Models\Discounts;
use App\Models\Parkings;
use App\Models\Vclasses;
use App\Models\Vehicles;
use Closure;

class CheckVID
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $checks = [
            'vehicle_id' => [Vehicles::class, 'uuid'],
            'parking_id' => [Parkings::class, 'uuid'],
            'discount_id' => [Discounts::class, 'id'],
            'class_id' => [Vclasses::class, 'id'],
        ];

        $parameters = array_intersect(
            array_keys($checks),
            $request->route()->parameterNames()
        );

        foreach ($parameters as $parameterName) {

            $parameter = $request->route()->parameter($parameterName);

            if (
                $parameter &&
                !(
                (new $checks[$parameterName][0])
                    ->where($checks[$parameterName][1], $parameter)
                    ->first()
                )
            ) {
                abort(404);
            }

        }

        return $next($request);
    }
}
