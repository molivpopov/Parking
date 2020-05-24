<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    public $timestamps = false;
    protected $guarded = ['id','uuid'];

    public function vclass()
    {
        return $this->belongsTo(Vclasses::class);
    }

    public function taxes()
    {
        return $this->hasMany(Taxes::class, 'vclass_id', 'vclass_id');
    }

    public function discounts()
    {
        return $this->belongsTo(Discounts::class, 'discount_id', 'id');
    }

}


