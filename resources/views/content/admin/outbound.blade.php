@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')


@section('title', 'Outbound')

@include('layouts/notification')

@section('content')

    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">admin /</span> Outbound
    </h4>

    <div class="card">
        <div class="card-datatable table-responsive">
            <table class="datatables-order table border-top">
                <thead>
                    <tr>
                        <th><strong>ID</strong></th>
                        <th><strong>ORDER ID</strong></th>
                        <th><strong>Name</strong></th>
                        <th><strong>CONTACT NUMBER</strong></th>
                        <th><strong>WAREHOUSE</strong></th>
                        <th><strong>SHIPPING ADDRESS</strong></th>
                        <th><strong>PAYMENT METHOD</strong></th>
                        <th><strong>STATUS</strong></th>
                        <th><strong>ACTIONS</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="btn btn-primary badge">Processing</button></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    @endsection
