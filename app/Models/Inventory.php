<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory'; // Specify the table name if it's different from the default

    protected $fillable = [
        'product_id',
        'quantity',
        'location',
    ];

}
