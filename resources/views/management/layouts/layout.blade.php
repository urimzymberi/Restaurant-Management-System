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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="{{asset('assets/js/plugins/plugins.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>

    <script src="{{asset('assets/js/bootstrap-clockpicker.min.js')}}"></script>



    <script src="{{asset('assets/js/template-custom.js')}}" type="text/javascript"></script>
    {{--<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>--}}
    <!-- <script src="assets/js/bootstrap-datepicker.min.js"></script> -->
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    {{--<script src="{{asset('assets/js/reservation-custom.js')}}"></script>s--}}
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <link href="{{asset('assets/css/plugins/plugins.css')}}" rel="stylesheet">

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/cr-1.5.3/fc-3.3.2/fh-3.1.7/r-2.2.7/sc-2.0.3/sl-1.3.1/datatables.min.js"></script>

    <link href="{{asset('assets/css/style1.css')}}" rel="stylesheet">
    @yield('scripts')
</head>
<body>
<div id="preloader">
    <div id="preloader-inner"></div>
</div>
@include('management.layouts.header')
@include('management.layouts.errors')
@include('management.layouts.status')
@yield('content')
{{--<section class="main-admin">--}}
{{--    <div class="container">--}}
{{--        <div class="wrapper-one">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-5 mt-5 text-center">--}}
{{--                    <h3 class="mt-5">CHOOSE A STORE</h3>--}}
{{--                    <a href="restaurant.html">--}}
{{--                        <div class="d-block store">--}}
{{--                            <div class="menu-box clearfix">--}}
{{--                                <div class="thumb">--}}
{{--                                    <img src="../assets/images/img-1.jpg" width="70" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="menu-content">--}}
{{--                                    <h4><a href="#">Ekstram Grill</a> <span class="open">open</span></h4>--}}
{{--                                    <p>vetem ketu mund qe te gjeni ushqime</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a href="">--}}
{{--                        <div class="d-block mt-2 store">--}}
{{--                            <div class="menu-box clearfix">--}}
{{--                                <div class="thumb">--}}
{{--                                    <img src="{{asset('assets/images/img-1.jpg')}}" width="70" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="menu-content">--}}
{{--                                    <h4><a href="#">Ekstrem Pica</a> <span class="open">open</span></h4>--}}
{{--                                    <p>vetem ketu mund qe te gjeni ushqime</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


<!-- jQuery plugins-->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>--}}
{{--<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>--}}

{{--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>--}}

@yield('js')
</body>
</html>
