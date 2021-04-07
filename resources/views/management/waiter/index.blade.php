@extends('management.layouts.layout')

@section('content')

    <section class="main-admin-restaurant">
        <div class="container">
            <form method="post" action="{{ route('table_details') }}">
                @csrf

                <div class="row mt-5">
                    @foreach($tables as $table)

                        @if($table->waiter_id == Auth::user()->id && $table->amount == null)
                            <button name="table" value="t_{{ $table->t_id }}o_{{ $table->o_id }}"
                                    class="col-md-2 mr-3 mt-5 mb-5 border-0 bg-transparent">
                                <div class="card card_costum_green">
                                    <span class="top-l">a</span>
                                    <span class="top-r">a</span>
                                    <p class="tables-number">{{ $table->table_no }}</p>
                                                            <p id="reservation_tables{{ $table->t_id }}" class="reservation_tables">`</p>
                                    <span class="bottom-l">a</span>
                                    <span class="bottom-r">a</span>
                                </div>
                            </button>
                        @elseif($table->waiter_id != Auth::user()->id && $table->amount == null && $table->waiter_id != null)

                            <div class="col-md-2 mr-3 mt-5 mb-5 border-0 bg-transparent">
                                <div class="card card_costum_yellow">
                                    <span class="top-l">a</span>
                                    <span class="top-r">a</span>
                                    <p class="tables-number">{{ $table->table_no }}</p>
                                                            <p id="reservation_tables{{ $table->t_id }}" class="reservation_tables">`</p>
                                    <span class="bottom-l">a</span>
                                    <span class="bottom-r">a</span>
                                </div>
                            </div>
                        @else
                            <button name="table" value="t_{{ $table->t_id }}o_0"
                                    class="col-md-2 mr-3 mt-5 mb-5 border-0 bg-transparent">
                                <div class="card card_costum_lavender">
                                    <span class="top-l">a</span>
                                    <span class="top-r">a</span>
                                    <p class="tables-number">{{ $table->table_no }}</p>
                                                            <p id="reservation_tables{{ $table->t_id }}" class="reservation_tables">`</p>
                                    <span class="bottom-l">a</span>
                                    <span class="bottom-r">a</span>
                                </div>
                            </button>
                        @endif
                    @endforeach

                </div>
            </form>
        </div>
    </section>
@endsection

@section('js')

    @php
    session_start();
        if (isset($_SESSION["error_script"])){
            echo $_SESSION["error_script"];
            unset($_SESSION["error_script"]);
        }
    @endphp
<script>
    @foreach($reservations as $reservation)
    $('#reservation_tables{{ $reservation->table_id }}').empty();
    $('#reservation_tables{{ $reservation->table_id }}').append('<span>Rezervuar {{ date('H:i', strtotime($reservation->date_time)) }}</span>');
    @endforeach
</script>
    <!-- jQuery plugins-->
    <script src="{{ asset('assets/js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/template-custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-clockpicker.min.js') }}"></script>
    <!-- <script src="assets/js/bootstrap-datepicker.min.js"></script> -->
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <!-- <script src="../assets/js/reservation-custom.js"></script> -->
@endsection
