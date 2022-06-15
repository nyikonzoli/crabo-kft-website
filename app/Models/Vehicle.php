<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';
    public $timestamps = false;
    protected $fillable = [
        "motor_cm",
        "passengers",
        "climate",
        "deposit",
    ];

    public function truck(){
        return $this->hasOne(Truck::class, 'vehicle_id');
    }

    public function packages(){
        return $this->hasMany(Package::class, 'vehicle_id');
    }

    public function equipments(){
        return $this->hasMany(Equipment::class, 'vehicle_id');
    }

    public function passengerCar(){
        return $this->hasOne(PassengerCar::class, 'vehicle_id');
    }
}
