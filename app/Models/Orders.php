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

    // belongsToMany relationship Bills
    public function bills()
    {
        return $this->belongsToMany(Bills::class);
    }
    // belongsToMany relationship Users
    public function users()
    {
        return $this->belongsToMany(Users::class);
    }


}
