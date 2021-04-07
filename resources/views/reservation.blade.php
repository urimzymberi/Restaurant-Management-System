@extends('layouts.layout')

@section('content')
    <div class="page-breadcrumb">
        <div class="container text-center">
            <h1>Bej nje Rezervim</h1>
        </div>
    </div>
    <!--==============end page header============-->
    <div class="space-80"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 ml-auto mr-auto">
                <div class="margin-b-40">
                    <h2 class="text-uppercase text-center">Rezervoni një Tavoline</h2>
                    <p class="text-center w-100">
                        Për të rezervuar tavolinen ju lutem plotesoni të gjitha të dhënat e kërkuara.
                    </p>
                </div>

                <form role="form" method="post" class="reservation-form" id="reservation-form" action="{{ route('reservation_store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group date">
                                <input type="date" class="form-control" name="r_date"  autocomplete="off" placeholder="Data">
{{--                                <div class="input-group-addon">--}}
{{--                                    <span class="fa fa-calendar"></span>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        {{--                        <div class="col-md-6">--}}
                        {{--                            <div class="input-group">--}}
                        {{--                                <input type="text" class="form-control " name="r_name" id="r_name" placeholder="Name">--}}
                        {{--                                <div class="input-group-addon">--}}
                        {{--                                    <span class="fa fa-user"></span>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="time" class="form-control" name="r_time" id="r_time" value="09:30" placeholder="Koha">
{{--                                <span class="input-group-addon">--}}
{{--                                        <span class="fa fa-clock-o"></span>--}}
{{--                                    </span>--}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{--                        <div class="col-md-6">--}}
                        {{--                            <div class="input-group">--}}
                        {{--                                <input type="text" class="form-control" name="r_email" id="r_email" placeholder="Email Id">--}}
                        {{--                                <div class="input-group-addon">--}}
                        {{--                                    <span class="fa fa-envelope"></span>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" name="r_guest" id="r_guest" placeholder="Numri i Mysafirëve">
                                <div class="input-group-addon">
                                    <span class="fa fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" name="r_phone_number" id="r_phone_number" placeholder="Numri i Telefonit" value="{{ Auth::user()->phone_number }}">
                                <div class="input-group-addon">
                                    <span class="fa fa-phone"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <textarea name="r_comment" placeholder="Komenti" id="comment" class="form-control"></textarea>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-xl btn-dark btn-block" name="r_submit" value="Rezervoni tani">
                    <div id="r_result"></div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('js')

    <script src="{{ asset('assets/js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/template-custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap-clockpicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/reservation-custom.js') }}"></script>

@endsection
