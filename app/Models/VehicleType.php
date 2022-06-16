<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    protected $table = 'vehicle_types';
    public $timestamps = false;
    protected $fillable = [
        "type",
    ];

    public function vehicles(){
        return $this->hasMany(Vehicle::class, 'vehicle_type_id');
    }
}
