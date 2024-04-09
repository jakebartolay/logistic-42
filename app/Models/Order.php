<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $table = 'order_items'; // Specify the table name if it's different from the default

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
        'created_at',
    ];
}
