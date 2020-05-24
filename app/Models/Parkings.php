<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parkings extends Model
{
    public $timestamps = false;
    protected $guarded = ['id'];
//    protected $table = 'parkings';

    public function vehicle()
    {
        return $this->belongsTo(Vehicles::class);
    }
}
