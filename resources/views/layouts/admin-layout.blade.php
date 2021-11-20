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

        {{-- @if (Request::is('admin/categories') || Request::is('admin/categories/*create'))
            @yield('content')
        @else
            <x-dynamic-component :component="$componentName" :data="$data" class="mt-4" />
        @endif --}}
            
            <x-dynamic-component :component="$componentName" :data="$data" class="mt-4" />

    </div>
    <!--  here Main Content Section ends -->

@endsection
