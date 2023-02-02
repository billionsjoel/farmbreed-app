<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FarmBreed Poultry</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="{{ asset('font-awesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/solid.css') }}" rel="stylesheet">

    <style>
        body,
        html {
            font-family: 'Asap', sans-serif;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
        }

        body {
            position: relative;
        }

        .black {
            color: #757575;
        }

        .primary-color {
            color: #f80;
        }

        .bg-primary-color {
            background-color: #f80;
        }

        .hover:hover {
            color: #f557c3 !important;
        }

        .bg-hover:hover {
            background-color: #f557c3 !important;
            color: white;
        }

        @media (max-width:641px) {
            body {
                font-family: 'Asap', sans-serif;
                margin: 0;
                padding: 0;
                overflow-x: hidden !important;
            }
        }
    </style>
</head>

<body>
    <div id="app">
        {{-- @include('layouts.components.nav') --}}
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
