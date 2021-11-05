
@extends('layouts.master')


@section('style')

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" }}>
    
@endsection




@section('layout')

<!--  here Main Content Section starts -->
<div class="main">

    @include('notes')

    @yield('content')
    
</div>
<!--  here Main Content Section ends -->
    
@endsection
