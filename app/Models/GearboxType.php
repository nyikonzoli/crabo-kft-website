<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GearboxType extends Model
{
    protected $table = 'gearbox_types';
    public $timestamps = false;
    protected $fillable = [
        "type",
    ];

    public function vehicles(){
        return $this->hasMany(Vehicle::class, 'gearbox_type_id');
    }
}
