<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IIPOS</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @include('inc.nav.nav_ipoh')
        <div class="container">
            
            @if(Auth::user()->type == 'IPOH')
                @include('inc.sidenav.sidenav_ipoh')
            @endif

            @if(Auth::user()->type == 'RPO')
                @include('inc.sidenav.sidenav_rpo')
            @endif

            @if(Auth::user()->type == 'Student')
                @include('inc.sidenav.sidenav_student')
            @endif

            @if(Auth::user()->type == 'Company')
                @include('inc.sidenav.sidenav_company')
            @endif
            
            @yield('content')

        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
