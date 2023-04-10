<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tokoaku</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Tokoaku adalah tokonya si aku" />
      <meta name="keywords" content="tokoaku, toko yang murah meriah" />
      <meta name="author" content="Arya Adhi Prasetya">
      <!-- Favicon icon -->
      <link rel="icon" href="{{ url('assets/images/favicon.ico')}}" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap/css/bootstrap.min.css') }}">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{ url('assets/icon/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/icon/font-awesome/css/font-awesome.min.css') }}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{ url('assets/icon/icofont/css/icofont.css') }}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ url('assets/css/jquery.mCustomScrollbar.css')}}">
  </head>

  <body>
  <body>
    <!DOCTYPE html>
<html lang="en">

<head>
    <title>Gradient Able bootstrap admin template by codedthemes </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Tokoaku" />
      <meta name="keywords" content="Toko yang sangat ramah" />
      <meta name="author" content="Arya Adhi Prasetya">
      <!-- Favicon icon -->
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
  </head>

  <body>
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    @include('templates.navbar')

    <main>
      @yield('content')
    </main>
        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="{{ url('assets/js/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ url('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{ url('assets/js/popper.js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{ url('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ url('assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ url('assets/js/modernizr/modernizr.js')}}"></script>
<!-- am chart -->
<script src="{{ url('assets/pages/widget/amchart/amcharts.min.js')}}"></script>
<script src="{{ url('assets/pages/widget/amchart/serial.min.js')}}"></script>
<!-- Chart js -->
<script type="text/javascript" src="{{ url('assets/js/chart.js/Chart.js')}}"></script>
<!-- Todo js -->
<script type="text/javascript " src="{{ url('assets/pages/todo/todo.js')}} "></script>
<!-- Custom js -->
<script type="text/javascript" src="{{ url('assets/pages/dashboard/custom-dashboard.min.js')}}"></script>
<script type="text/javascript" src="{{ url('assets/js/script.js')}}"></script>
<script type="text/javascript " src="{{ url('assets/js/SmoothScroll.js')}}"></script>
<script src="{{ url('assets/js/pcoded.min.js')}}"></script>
<script src="{{ url('assets/js/vartical-demo.js')}}"></script>
<script src="{{ url('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
</body>

</html>
