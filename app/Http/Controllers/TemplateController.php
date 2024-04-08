<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Inbound;
use App\Models\Outbound;

class TemplateController extends Controller
{
  public function index()
  {
    return view('dashboard.index');
  }

  public function page2()
  {

    $orders = Order::latest('created_at')->paginate(15);

    // Count the number of orders with status 'Pending'
    $pendingCount = Order::where('status', 'Pending')->count();

    // Count the number of orders with status 'Completed'
    $completedCount = Order::where('status', 'Completed')->count();

    // Count the number of orders with status 'Refunded'
    $refundedCount = Order::where('status', 'Refunded')->count();

    // Count the number of orders with status 'Failed'
    $failedCount = Order::where('status', 'Failed')->count();

    return view('WarehouseHomeIndex.page2', compact('orders', 'pendingCount', 'completedCount', 'refundedCount', 'failedCount'));
  }

  public function page3()
  {
    $inboundOrders = Inbound::latest('order_id_inbound')->paginate(15);

    // Count the number of orders with status 'Pending'
    $inTransitCountInbound = Inbound::where('status_inbound', 'In Transit')->count();

    // Count the number of orders with status 'Completed'
    $preparingCountInbound = Inbound::where('status_inbound', 'Preparing')->count();

    // Count the number of orders with status 'Refunded'
    $refundedCountInbound = Inbound::where('status_inbound', 'Return Product In Transit')->count();

    // Count the number of orders with status 'Failed'
    $failedCountInbound = Inbound::where('status_inbound', 'Failed')->count();


    return view('WarehouseHomeIndex.page3', compact('inboundOrders', 'inTransitCountInbound', 'preparingCountInbound', 'refundedCountInbound', 'failedCountInbound'));
  }

  public function markProductReceived(Request $request)
  {
    // Get the orderId from the request
    $orderId = $request->orderId;

    // Find the inbound order by orderId
    $inboundOrder = Inbound::where('order_id_inbound', $orderId)->first();

    // Check if the inbound order exists
    if ($inboundOrder) {
      // Transfer the data to the orders table
      Order::create([
        'order_id' => $inboundOrder->order_id_inbound,
        'client_name' => $inboundOrder->client_name_inbound,
        'product_name' => $inboundOrder->product_name_inbound,
        'contact_number' => $inboundOrder->contact_number_inbound,
        'shipping_address' => $inboundOrder->shipping_address_inbound,
        'payment_method' => $inboundOrder->payment_method_inbound,
        'product_amount' => $inboundOrder->product_amount_inbound,
        'status' => $inboundOrder->status_inbound === 'Return Product In Transit' ? 'Return' : 'Received',
      ]);

      // Update the status of the inbound order to "Product Received"
      $inboundOrder->update(['status_inbound' => 'Product Received']);

      // Return a success response
      return response()->json(['message' => 'Product received successfully']);
    } else {
      // Return a failure response if the inbound order is not found
      return response()->json(['error' => 'Inbound order not found'], 404);
    }
  }


  public function page4()
  {
    $outboundOrders = Outbound::latest()->paginate(15);
    $pendingCountOutbound = Outbound::where('status_outbound', 'Pending')->count();
    $completedCountOutbound = Outbound::where('status_outbound', 'Completed')->count();
    $packedCountOutbound = Outbound::where('status_outbound', 'Packed')->count();
    $forInvoiceCountOutbound = Outbound::where('status_outbound', 'For Invoice')->count();
    return view('WarehouseHomeIndex.page4', compact('outboundOrders', 'pendingCountOutbound', 'completedCountOutbound', 'packedCountOutbound', 'forInvoiceCountOutbound'));
  }
  public function invoice()
  {
    return view('WarehouseHomeIndex.invoice');
  }


  public function markProductShipped(Request $request)
  {
    $orderId = $request->orderId;
    $order = Order::find($orderId);

    if ($order) {
      Outbound::create([
        'order_id_outbound' => $order->order_id,
        'client_name_outbound' => $order->client_name,
        'product_name_outbound' => $order->product_name,
        'contact_number_outbound' => $order->contact_number,
        'shipping_address_outbound' => $order->shipping_address,
        'payment_method_outbound' => $order->payment_method,
        'product_amount_outbound' => $order->product_amount,
      ]);
      return response()->json(['message' => 'Order marked as shipped successfully']);
    } else {
      return response()->json(['error' => 'Order not found'], 404);
    }
  }


  public function getOutboundData($orderId)
  {

    $outboundData = Outbound::where('order_id_outbound', $orderId)->first();
    return response()->json($outboundData);
  }


  public function showInvoice(Request $request)
  {
    $outboundData = json_decode($request->query('data'));

    return view('WarehouseHomeIndex.invoice', ['outboundData' => $outboundData]);
  }


  public function printInvoice(Request $request)
  {
    $outboundData = json_decode($request->query('data'));
    //dd($outboundData);
    return view('WarehouseHomeIndex.invoicePrint', ['outboundData' => $outboundData]);
  }
}
