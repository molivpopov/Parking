<?php

namespace App\Http\Controllers;

use App\Models\Discounts;
use App\Models\Vclasses;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function getClassesId()
    {
        return response()->json(Vclasses::all()->mapWithKeys(function ($item) {
            return [$item->name => [
                'id' => $item->id,
                'places' => $item->places
            ]];
        }));
    }
}
