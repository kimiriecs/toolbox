<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Nunito Font & Irish Grover Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">


    <!-- Global Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('accordion/accordion.css') }}">

    <!-- Individual Page Styles -->
    @yield('style')
    @yield('kanban-styles')

    <title>{{ Str::of(config('app.name'))->title() }}</title>
</head>

<body>

    <!--  here Navbar Section starts -->
    <div class="navbar">
        @include('layoutComponents.navbar')
    </div>
    <!--  here Navbar Section ends -->

    <!--  here Main Content Section starts -->
    <div class="wrapper">

        @yield('layout')

    </div>
    <!--  here Main Content Section ends -->


    @yield('kanban-scripts')
    <script src="{{ asset('accordion/accordion.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>


</body>

</html>
