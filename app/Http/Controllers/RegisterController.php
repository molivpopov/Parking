<?php

namespace App\Http\Controllers;

use App\Models\Vclasses;
use App\Models\Vehicles;

class RegisterController extends Controller
{
    public function register($number, $classId)
    {

        if (preg_match('/^[\w]{6,}$/i', $number) < 1) {
            return response('this is not valid car number', 422);
        }

        if (Vehicles::where('number', $number)->first()){
            return response('this vehicle is almost registered', 422);
        }

        $vehicle = Vehicles::create([
            'number' => $number,
            'vclass_id' => $classId
        ]);

        $vehicle = Vehicles::with('vclass')->find($vehicle->id);

        return response()->json([
            'vehicle_id' => $vehicle->uuid,
            'number' => $vehicle->number,
            'vehicle_type' => $vehicle->vclass->name,
            'places' => $vehicle->vclass->places
        ]);
    }
}
