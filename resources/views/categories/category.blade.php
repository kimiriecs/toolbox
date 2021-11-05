@extends('layouts.admin-layout')


@section('content')

<br>
<h3>Category name: {{ $categoryRealName }}</h3>
<br>
<h3>Current route name: {{ $message }}</h3>
<br>
<h3>Current route uri: {{ $currentPath }}</h3>
    
@endsection