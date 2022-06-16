<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelType extends Model
{
    protected $table = 'fuel_types';
    public $timestamps = false;
    protected $fillable = [
        "type",
    ];

    public function vehicles(){
        return $this->hasMany(Vehicle::class, 'fuel_type_id');
    }
}
