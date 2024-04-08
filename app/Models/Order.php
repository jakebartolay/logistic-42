<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'order_id';
    public $timestamps = true;
    protected $fillable = [
        'order_id',
        'client_name',
        'product_name',
        'contact_number',
        'shipping_address',
        'payment_method',
        'product_amount',
        'date_received',
        'status',
    ];

    protected $attributes = [
        'status' => 'Received', // Default value for the "status" attribute
    ];


    protected static function boot()
    {
        parent::boot();
    
        // Define a creating event handler
        static::creating(function ($order) {
            $order->date_received = now(); // Set the value of date_received to the current date and time
    
            // Retrieve the latest inbound order
            $latestInboundOrder = Inbound::whereNull('order_id_inbound')->first();
    
            if ($latestInboundOrder) {
                // Set the order_id of the new Order model to match order_id_inbound
                $order->order_id = $latestInboundOrder->order_id_inbound;
            }
        });
    }







    
}
