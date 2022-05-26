<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class order_ship extends Pivot
{
    use HasFactory;

    protected $table = 'order_ship';

    protected $fillable = [
        'order_id',
        'ship_id',
        'quantity',
        'unit_price',
    ];


    
}

// TODO hacer la reladcion