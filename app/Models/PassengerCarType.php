<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassengerCarType extends Model
{
    protected $table = 'passenger_car_types';
    public $timestamps = false;
    protected $fillable = [
        "name",
    ];

    public function passengerCars(){
        return $this->hasMany(PassengerCar::class, 'type_id');
    }
}
