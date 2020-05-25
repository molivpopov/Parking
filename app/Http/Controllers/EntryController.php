<?php

namespace App\Http\Controllers;

use App\Calculations\Space;
use App\Models\Parkings;
use App\Models\Vehicles;

class EntryController extends Controller
{
    use Space;

    /**
     * @param $vehicleId
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function entry($vehicleId)
    {
        $isParked = Parkings::with('vehicle')
            ->whereNull('exit')
            ->whereHas('vehicle', function ($q) use ($vehicleId) {
                $q->where('uuid', $vehicleId);
            })->first();

        // do not admits already parked vehicle
        if ($isParked){
            return response("this vehicle is already parked!", 422);
        }

        $vehicle = Vehicles::with('vclass')
            ->where('uuid', $vehicleId)
            ->first();

        if ($vehicle->vclass->places > $this->freeSpace()){
            return response("Sorry, the parking is almost full!", 422);
        };

        // this return only columns: id, vehicle_id - WHY??
        $parking = Parkings::create([
            'vehicle_id' => $vehicle->id
        ]);

        $parking = Parkings::find($parking->id);

        return response()->json([
            'entry' => [
                'parking_id' => $parking->uuid,
                'number' => $vehicle->number,
                'time' => $parking->entry,
            ]
        ]);

    }

    /**
     * @param $parking_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function exit($parking_id)
    {
        $isParked = Parkings::with('vehicle')
            ->where('uuid', $parking_id);

        if($isParked->first()->exit){
            return response('this is an old parking_id', 422);
        }

        $isParked->update([
            'exit' => date('Y-m-d H:i:s')
        ]);

        return redirect()->action(
            'MiscellaneousController@bill', ['parking_id' => $parking_id]
        );

    }
}
