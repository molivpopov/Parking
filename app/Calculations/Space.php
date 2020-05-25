<?php

namespace App\Calculations;

use Illuminate\Support\Facades\DB;

trait Space
{
    protected function freeSpace()
    {
        $usedPlaces = DB::select(/** @lang text */ "
            SELECT sum(vc.places) AS used_places
            FROM parkings AS p
            JOIN vehicles AS vh ON vh.id = p.vehicle_id
            JOIN vclasses AS vc ON vc.id = vh.vclass_id
            WHERE p.exit IS NULL;
        ")[0];

        return env('MAX_PLACES', 200) - $usedPlaces->used_places;
    }
}
