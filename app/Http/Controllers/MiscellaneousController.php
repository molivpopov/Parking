<?php

namespace App\Http\Controllers;

use App\Calculations\Bill;
use App\Models\Parkings;
use Illuminate\Support\Facades\DB;

class MiscellaneousController extends Controller
{
    use Bill;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function space()
    {

        $usedPlaces = DB::select(/** @lang text */ "
            SELECT sum(vc.places) AS used_places
            FROM parkings AS p
            JOIN vehicles AS vh ON vh.id = p.vehicle_id
            JOIN vclasses AS vc ON vc.id = vh.vclass_id
            WHERE p.exit IS NULL;
        ")[0];

        return response()->json(['free' => env('MAX_PLACES', 200) - $usedPlaces->used_places]);

    }

    /**
     * @param $number
     * @param null $calculationTime
     * @return \Illuminate\Http\JsonResponse
     */
    public function bill($number, $calculationTime = null)
    {

        $entry = Parkings::with(['vehicle.taxes', 'vehicle.discounts'])
            ->whereNull('exit')
            ->whereHas('vehicle', function ($q) use ($number) {
                $q->where('number', $number);
            })->first();

        if (!$entry) {
            return response()->json('this vehicle is out of parking');
        }

        $calculationTime = $calculationTime ?: date('Y-m-d H:i:s');

        $bill = $this->makeBill(
            strtotime($entry->entry),
            strtotime($calculationTime),
            $entry->vehicle->taxes
        );

        $total = array_reduce($bill, function ($carry, $value) {
            return $carry + $value['quantity'] * $value['rate'];
        });

        $bill['car_number'] = $entry->vehicle->number;
        $bill['time_entry'] = $entry->entry;
        $bill['time_calculation'] = $calculationTime;
        $bill['sub_total'] = $total;
        $bill['discount'] = [

            'name' => $entry->vehicle->discounts
                ? $entry->vehicle->discounts->name
                : 'free of discount',

            'sum' => $entry->vehicle->discounts
                ? $entry->vehicle->discounts->percent * $total
                : 0
        ];

        $bill['big_total'] = $total - $bill['discount']['sum'];

        return response()->json($bill);
    }
}
