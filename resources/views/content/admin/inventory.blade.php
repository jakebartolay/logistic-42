@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')


@section('title', 'Inventory')

@include('layouts/notification')

@section('content')


<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">admin /</span> Inventory
  </h4>

    <div class="card">
        <div class="table-responsive">

            <div class="table">
                <table class="table dataTable">
                    <thead class="text-center">
                        <tr>
                            <th><strong>ID</strong></th>
                            <th><strong>Product ID</strong></th>
                            <th><strong>Product Name</strong></th>
                            <th><strong>Quantity</strong></th>
                            <th><strong>Location</strong></th>
                            <th><strong>Date</strong></th>
                            <th><strong>Action</strong></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($inventory as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->product_id }}</td>
                                <td>{{ $data->product_name }}</td>
                                <td>{{ $data->quantity }}</td>
                                <td>{{ $data->location }}</td>
                                <td>{{ $data->created_at->format('F j, Y') }}</td>
                                <td>
                                    <a class="btn badge btn-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
