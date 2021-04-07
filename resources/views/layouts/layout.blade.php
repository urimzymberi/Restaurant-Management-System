
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soopcy - A Responsive restaurant HTML template</title>
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/plugins/plugins.css')}}" rel="stylesheet">
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <!--slider revolution-->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css"> -->
    <!--main css file-->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include('layouts.header')
<!--/preloader-->
@yield('content')
@include('layouts.footer')

<!--back to top-->
<a href="#" class="scrollToTop" style="display: none;"><i class="fa fa-arrow-up"></i></a>
<!--back to top end-->
{{--<!-- jQuery plugins-->--}}
{{--<script src="{{asset('assets/js/plugins/plugins.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/template-custom.js')}}" type="text/javascript"></script>--}}
@yield('js')
</body>
</html>
