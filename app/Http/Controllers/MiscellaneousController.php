<?php

namespace App\Http\Controllers;

use App\Calculations\Bill;
use App\Calculations\Space;
use App\Models\Parkings;

class MiscellaneousController extends Controller
{
    use Bill, Space;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function space()
    {
        return response()->json(['free' => $this->freeSpace()]);
    }

    /**
     * @param $uuid
     * @param null $calculationTime
     * @return \Illuminate\Http\JsonResponse
     */
    public function bill($parkingId, $calculationTime = null)
    {

        $entry = Parkings::with(['vehicle.taxes', 'vehicle.discounts'])
            ->where('uuid', $parkingId)
            ->first();

        if ($entry->exit) {
            $calculationTime = $entry->exit;
        }

        $calculationTime = $calculationTime
            ? strtotime($calculationTime)
            : time();

        $bill = $this->makeBill(
            strtotime($entry->entry),
            $calculationTime,
            $entry->vehicle->taxes
        );

        $total = array_reduce($bill, function ($carry, $value) {
            return $carry + $value['quantity'] * $value['rate'];
        });

        $bill['car_number'] = $entry->vehicle->number;
        $bill['time_entry'] = $entry->entry;
        $bill['time_calculation'] = date('Y-m-d H:i:s', $calculationTime);
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
