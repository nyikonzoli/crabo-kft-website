<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassengerCar extends Model
{
    protected $table = 'passanger_cars';
    public $timestamps = false;
    protected $fillable = [
        "type_id",
        "vehicle_id",
    ];

    public function vehicle(){
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }

    public function type(){
        return $this->belongsTo(PassengerCarType::class, 'type_id');
    }
}
