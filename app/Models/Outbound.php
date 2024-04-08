<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outbound extends Model
{
    use HasFactory;
    protected $table = 'outbound';
    public $timestamps = true;

    protected $fillable = [
        'order_id_outbound',
        'client_name_outbound',
        'product_name_outbound',
        'contact_number_outbound',
        'shipping_address_outbound',
        'payment_method_outbound',
        'product_amount_outbound',
    ];


    protected static function boot()
    {
        parent::boot();
    
        static::creating(function ($order) {
            // Retrieve the latest outbound order
            $latestOutboundOrder = Outbound::whereNull('order_id_outbound')->first();
        
            if ($latestOutboundOrder) {
                // Set the order_id_outbound of the new Order model to match order_id_inbound
                $order->order_id_outbound = $latestOutboundOrder->order_id_outbound;
            }
        });
    }



}
