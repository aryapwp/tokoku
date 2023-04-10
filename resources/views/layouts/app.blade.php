<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
    <meta name="keywords" content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ url('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/icon/icofont/css/icofont.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css')}}">
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    <script type="text/javascript" src="{{ url('assets/js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/popper.js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ url('assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ url('assets/js/modernizr/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/modernizr/css-scrollbars.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/common-pages.js')}}"></script>
</body>
</html>
