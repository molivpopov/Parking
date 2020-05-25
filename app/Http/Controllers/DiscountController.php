<?php

namespace App\Http\Controllers;

use App\Models\Discounts;
use App\Models\Vehicles;

class DiscountController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDiscountId()
    {
        return response()->json(Discounts::all()->mapWithKeys(function ($item) {
            return [$item->name => [
                'id' => $item->id,
                'percent_discount' => sprintf('%3d', $item->percent * 100)
            ]];
        }));
    }

    /**
     * @param $vehicleId
     * @param $discountId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setVehicleDiscount($vehicleId, $discountId)
    {
        Vehicles::where('uuid', $vehicleId)->update([
            'discount_id' => $discountId,
        ]);

        return redirect()->action(
            'DiscountController@getDiscount', ['vehicle_id' => $vehicleId]
        );
    }

    /**
     * @param $vehicleId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDiscount($vehicleId)
    {
        $discount = Vehicles::with('discounts')
            ->where('uuid', $vehicleId)
            ->first();

        return response()->json([
            'vehicle_number' => $discount->number,
            'discount_name' => $discount->discounts ? $discount->discounts->name : 'not set yet!',
        ]);
    }
}
