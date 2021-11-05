
@extends('layouts.master')



@section('style')

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" }}>
    
@endsection




@section('layout')

<!--  here Sidebar Section starts -->
<div class="sidebar">
    @include('layoutComponents.sidebar')
</div>
<!--  here Sidebar Section ends -->


<!--  here Main Content Section starts -->
<div class="main">
    
    @include('notes')

    @yield('content')
    
</div>
<!--  here Main Content Section ends -->
    
@endsection
