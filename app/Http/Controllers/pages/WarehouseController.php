<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\inventory;
use App\Models\order;

class WarehouseController extends Controller
{
    public function dashboard(){
    $inventory = Inventory::count();
    return view('content.admin.dashboard', compact('inventory'));

    }

    public function order(){
        $order = Order::all();
        return view('content.admin.order', compact('order'));
    
    }
    
    public function inventory(){
        $inventory = Inventory::all();
        return view('content.admin.inventory', compact('inventory'));
    
    }

    public function inbound(){

        return view('content.admin.inbound');
    
    }

    public function outbound(){

        return view('content.admin.outbound');
    
    }

    public function invoice(){

        return view('content.admin.invoice');
    
    }

    public function report(){

        return view('content.admin.report');
    
    }
}
