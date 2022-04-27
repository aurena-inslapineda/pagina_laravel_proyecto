<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    use HasFactory;

    protected $table = 'bills';

    protected $fillable = [
        'order_id',
        'ship_id',
        'quantity',
        'unit_price',
        'total_price',
    ];

    public function ships() {
        return $this->belongsToMany(Ships::class);
    }
    // belongsToMany relationship Orders
    public function orders()
    {
        return $this->belongsToMany(Orders::class);
    }
}
