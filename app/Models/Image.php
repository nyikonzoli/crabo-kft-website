<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    public $timestamps = false;
    protected $fillable = [
        "uri",
        "vehicle_id"
    ];

    public function vehicle(){
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }
}
