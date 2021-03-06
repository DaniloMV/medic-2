<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.nav_user')

        <div class="row left-right-padding">
            <div class="container-fluid">
                <div class="row">
                @if (Auth::user())
                    <div class="col-md-3 col-sm-3 col-lg-2">
                        @include('layouts.sidenav_user')
                    </div>
                    <div class="col-md-9 col-sm-9 col-lg-10">
                        @yield('content')
                    </div>
                @else
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        @yield('content')
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('footer')
</body>
</html>
