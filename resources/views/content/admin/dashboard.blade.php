@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')


@section('title', 'Dashboard')

@include('layouts/notification')

@section('content')

    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">admin /</span> Dashboard
    </h4>


    <!-- Card Border Shadow -->
    <div class="row">
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card card-border-shadow-primary">
                <div class="card-body">
                    <p class="mb-1 fw-bolder fs-4">Inventory</p>
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-label-primary"><i class='ti ti-git-fork ti-md'></i></span>
                        </div>
                        <h4 class="ms-1 mb-0">{{ $inventory }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card card-border-shadow-info">
                <div class="card-body">
                    <p class="mb-1 fw-bolder fs-4">Inbound</p>
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-label-info"><i class='ti ti-clock ti-md'></i></span>
                        </div>
                        <h4 class="ms-1 mb-0">0</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card card-border-shadow-primary">
                <div class="card-body">
                    <p class="mb-1 fw-bolder fs-4">Outbound</p>
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-calendar ti-md"></i></span>
                        </div>
                        <h4 class="ms-1 mb-0">0</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card card-border-shadow-danger">
                <div class="card-body">
                    <p class="mb-1 fw-bolder fs-4">Reports</p>
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-label-danger"><i
                                class='ti ti-alert-triangle ti-md'></i></span>
                        </div>
                        <h4 class="ms-1 mb-0">0</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
