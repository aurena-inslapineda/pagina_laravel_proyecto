<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Focus extends Model
{
    use HasFactory;

    protected $fillable = [
        'focus_name'
    ];

    protected $table = 'focus';
}
