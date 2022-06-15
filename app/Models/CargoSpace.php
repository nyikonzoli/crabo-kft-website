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
        "truck_id",
    ];

    public function truck(){
        return $this->belongsTo(Truck::class, 'truck_id');
    }
}
