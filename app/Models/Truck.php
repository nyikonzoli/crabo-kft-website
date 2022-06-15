<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    protected $table = 'trucks';
    public $timestamps = false;
    protected $fillable = [
        "own_weight",
        "combined_weigth",
        "vehicle_id",
    ];

    public function cargoSpace(){
        return $this->hasOne(CargoSpace::class, 'truck_id');
    }

    public function vehicle(){
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }
}
