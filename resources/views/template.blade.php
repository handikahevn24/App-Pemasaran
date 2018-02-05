<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Sistem Pemasaran</title>
        <link href="{{ asset('bootstrap-3.3.7/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('js/style.js')}}" rel="stylesheet">
    
        <!--[if It IE 9]>
        <script src="{{ asset('http://localhost:8000/js/html5shiv.min.js') }}"></script>
        <script src="{{ asset('http://localhost:8000/js/respond.min.js') }}"></script>
        -->
    </head>
    <body>
        @yield('main')

        @yield('footer')

        <script src="{{ asset('js/jquery_2_2_1.min.js') }}"></script>
        <script src="{{ asset('bootstrap-3.3.7/js/bootstrap.min.js') }}"></script> 
        <script src="{{ asset('js/style.js') }}"></script>  
    </body>
</html>