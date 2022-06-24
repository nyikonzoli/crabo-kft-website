<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoSpace extends Model
{
    protected $table = 'cargo_spaces';
    public $timestamps = false;
    protected $fillable = [
        "height",
        "width",
        "length",
        "vehicle_id",
    ];

    public function vehicle(){
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }
}
