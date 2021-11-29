
@extends('layouts.master')


@push('home-layout-styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" }}> 
@endpush




@section('layout')

<!--  here Main Content Section starts -->
<div class="main">

    @yield('content')
    
</div>
<!--  here Main Content Section ends -->
    
@endsection
