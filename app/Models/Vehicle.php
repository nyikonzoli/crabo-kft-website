<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';
    public $timestamps = false;
    protected $fillable = [
        "plate",
        "year",
        "fuel_type_id",
        "doors",
        "seats",
        "brand",
        "model",
        "bodywork_type_id",
        "gearbox_type_id",
        "outer_color",
        "inner_color",
        "motor",
        "description",
        "vehicle_type_id",
    ];

    public function packages(){
        return $this->hasMany(Package::class, 'vehicle_id');
    }

    public function equipments(){
        return $this->belongsToMany(Equipment::class, 'equipment_vehicle');
    }

    public function fuel(){
        return $this->belongsTo(FuelType::class, 'fuel_type_id');
    }

    public function gearbox(){
        return $this->belongsTo(GearboxType::class, 'gearbox_type_id');
    }

    public function bodywork(){
        return $this->belongsTo(BodyworkType::class, 'bodywork_type_id');
    }

    public function tpye(){
        return $this->belongsTo(VehicleType::class, 'vehicle_type_id');
    }

    public function cargoSpace(){
        return $this->hasOne(CargoSpace::class, 'vehicle_id');
    }
}
