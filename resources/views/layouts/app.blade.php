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

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" }}>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" }}>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" }}>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}" }}>

    <title>{{ Str::of(config('app.name'))->title() }}</title>
</head>

<body>

    <!--  here Navbar Section starts -->
    <div class="navbar">
        @include('layoutComponents.navbar')
    </div>
    <!--  here Navbar Section ends -->


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


    <script src="{{ asset('js/index.js') }}"></script>

</body>

</html>
