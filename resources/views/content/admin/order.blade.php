@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')


@section('title', 'Order')

@include('layouts/notification')

@section('content')  
 
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">admin /</span> Order List
  </h4>
<div class="card">
    <div class="table-responsive">

        <div class="table">
            <table class="table dataTable">
                <thead class="text-center">
                    <tr>
                        <th><strong>ID</strong></th>
                        <th><strong>Order ID</strong></th>
                        <th><strong>Product ID</strong></th>
                        <th><strong>Quantity</strong></th>
                        <th><strong>Price</strong></th>
                        <th><strong>Date</strong></th>
                        <th><strong>Action</strong></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($order as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->order_id }}</td>
                            <td>{{ $data->product_id }}</td>
                            <td>{{ $data->quantity }}</td>
                            <td>${{ number_format($data->price, 2) }}</td>
                            <td>{{ $data->created_at->format('F j, Y') }}</td>
                            <td>
                                <a class="btn badge btn-primary">Process</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
