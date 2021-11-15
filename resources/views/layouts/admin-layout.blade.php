@extends('layouts.master')


@push('admin-styles')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" }}>
@endpush


@section('layout')

    <!--  here Sidebar Section starts -->
    <div class="sidebar">
        @include('layoutComponents.sidebar')
    </div>
    <!--  here Sidebar Section ends -->


    <!--  here Main Content Section starts -->
    <div class="main">

        @yield('content')

    </div>
    <!--  here Main Content Section ends -->

@endsection
