<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ships extends Model
{
    use HasFactory;

    protected $fillable = [
        'ship_name',
        'manufacturer_id',
        'rol_id',
        'focus_id',
        'ship_image',
        'crew_size',
        'length',
        'mass',
        'unit_price',
        'units_in_stock',
    ];

    protected $table = 'ships';
}
