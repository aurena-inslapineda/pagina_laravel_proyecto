<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'bill_id',
        'paid',
        'status',
    ];



    // belongsToMany relationship Users
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function ships()
    {
        return $this->belongsToMany(Ships::class, 'order_ship')
                    ->using(order_ship::class)
                    ->withPivot('quantity', 'unit_price')
                    ->withTimestamps();
    }
}
