@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')


@section('title', 'Report')

@include('layouts/notification')

@section('content')  
 
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">admin /</span> Reports
  </h4>

@endsection
