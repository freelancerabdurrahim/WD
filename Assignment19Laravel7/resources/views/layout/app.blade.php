<!DOCTYPE html>
<html lang="en">
<head>
    <title>First Laravel Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

</head>
<body>

    @include('layout.Header')

    @yield('content')

    @include('layout.Footer')
    




    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    {{-- <script src="{{asset('js/waypoints.min.js')}}"></script> --}}
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>