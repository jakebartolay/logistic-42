<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TemplateController;

Route::get('/', [TemplateController::class, 'index']);

/*FOR ORDERS TABLE*/
Route::get('/page2', [TemplateController::class, 'order']);

/*FOR INBOUND TABLE*/
Route::get('/page3', [TemplateController::class, 'inbound']);
Route::post('/markProductReceived', [TemplateController::class, 'markProductReceived'])->name('markProductReceived');

/*FOR OUTBOUND TABLE*/
Route::get('/page4', [TemplateController::class, 'outbound']);

Route::get('/invoice', [TemplateController::class, 'invoice']);

Route::post('/markProductShipped', [TemplateController::class, 'markProductShipped'])->name('markProductShipped');

/*FOR INVOICE*/
Route::get('/get-outbound-data/{orderId}', [TemplateController::class, 'getOutboundData'])->name('get.outbound.data');
// Route for displaying the invoice
Route::get('/invoice', [TemplateController::class, 'showInvoice'])->name('invoice');
Route::get('/invoicePrint', [TemplateController::class, 'printInvoice'])->name('invoicePrint');
