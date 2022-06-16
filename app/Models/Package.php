<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';
    public $timestamps = false;
    protected $fillable = [
        "duration",
        "price",
        "vehicle_id",
        "partner_price",
    ];

    public function discount(){
        return $this->hasOne(Discount::class, 'package_id');
    }

    public function vehicle(){
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }
}
