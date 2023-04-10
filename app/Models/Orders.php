<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'date',
        'customer_id',
        'address',
        'subtotal',
        'discount',
        'total',
    ];
}
