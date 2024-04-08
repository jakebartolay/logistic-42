<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbound extends Model
{
    use HasFactory;
    protected $table = 'inbound';
    protected $primaryKey = 'order_id_inbound';
    public $timestamps = false;
    protected $fillable = [
        'status_inbound', // Add this line to allow mass assignment for the status_inbound field
        // Add other fillable fields here if needed
    ];
}
