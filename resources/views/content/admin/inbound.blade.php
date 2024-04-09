@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')


@section('title', 'Inbound')

@include('layouts/notification')

@section('content')

    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">admin /</span> Inbound
    </h4>

    <!-- Order List Table -->
    <div class="card">
        <div class="card-datatable table-responsive">

            <!-- Table -->
            <table class="datatables-order table border-top">
                <thead class="text-center">
                    <tr>
                        <th><strong>ID</strong></th>
                        <th><strong>Order ID</strong></th>
                        <th><strong>Customer Name</strong></th>
                        <th><strong>Contact Number</strong></th>
                        <th><strong>Shipping Address</strong></th>
                        <th><strong>Product Amount</strong></th>
                        <th><strong>Date Received</strong></th>
                        <th><strong>Status</strong></th>
                        <th><strong>Actions</strong></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <button class="btn btn-primary badge">
                                Move to Outbound
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
