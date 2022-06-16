<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $table = 'discounts';
    public $timestamps = false;
    protected $fillable = [
        "package_id",
        "new_price",
        "new_partner_price",
        "active",
    ];

    public function package(){
        return $this->belongsTo(Package::class, 'package_id');
    }
}
