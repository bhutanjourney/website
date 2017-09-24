<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    {{-- jquery plugins --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    {{-- customised stylesheets --}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    {{-- bootstrap themes --}}
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">


    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        {{-- menu bar --}}
        <div>
            @include('layouts.website.includes.navbar')
        </div>
        <div class="container">
            @yield('content')
        </div>
        {{-- widgets --}}
        <div class="container-fluid">
            @include('layouts.website.includes.widgets')
        </div>
        <div style="text-align:center;">
        <h6><strong> &copy;<?php  echo date("Y"); echo " BHUTAN JOURNEYS ALL RIGHT RESERVED!";?></strong></h6>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="/js/app.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
