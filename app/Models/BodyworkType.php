<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyworkType extends Model
{
    protected $table = 'bodywork_types';
    public $timestamps = false;
    protected $fillable = [
        "type",
    ];

    public function vehicles(){
        return $this->hasMany(Vehicle::class, 'bodywork_type_id');
    }
}
