@extends('management.layouts.layout')
@section('content')
    <div class="container px-5" >
        <div class="row" style=" margin-top: 100px;">
            <div class="col-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h4 class="text-center">Porosite<strong> <i></i></strong>
                        </h4>
                    </div>
                    <div class="box">
{{--                        <div class="table-responsive">--}}
                            <table class="table table-bordered" style="margin-bottom: 5px; width: 100%" id="prepare-table">
                                <thead style="background-color: #79a20642;">
                                <th> Numri i porosise</th>
                                <th> Emri i ushqimit</th>
                                <th> Sasia</th>
                                <th> Filluar</th>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
            @endsection
            @section('scripts')
{{--                <script src="{{asset('js/bootstrap-editable.min.js')}}"></script>--}}
                <script type="text/javascript">
                    $(document).ready(function() {
                        let table = $('#prepare-table').DataTable({
                            responsive: true,
                            dom: 'lrtsp',
                            pagination: true,
                            scrollX: true,
                            "sPaginationType": "full_numbers",
                            serverSide: true,
                            processing: true,
                            searching: true,
                            "deferRender": true,
                            ajax: {
                                url: '{{route('prepare.index')}}',
                                data: function (d) {

                                }
                            },
                            columns: [
                                {data:'order_id', name:'order_id', searchable: true, orderable: false},
                                {data: 'item', name: 'item'},
                                {data: 'quantity', name: 'quantity', searchable:false, orderable:false},
                                {data: 'start', name: 'start'},
                            ],
                            order: [[3, "desc"]],
                            fnDrawCallback: function () {
                                $('#prepare-table tbody').on('click','.edit-button', function (e){

                                    e.preventDefault();
                                    $.ajax({
                                        type: "PATCH",
                                        url:'{{url('/prepare')}}/' + $(this).data("pk"),
                                        data: {name: $(this).data("name"), _token: '{{csrf_token()}}'},
                                        success: function (response){
                                            table.draw();
                                        }
                                    });
                                });
                            },
                            "oLanguage": {
                                "sSearch": "Kërko:"
                            }
                        });

                        // $('#filter_form').submit(function (event) {
                        //     event.preventDefault();
                        //     table.draw(true);
                        //     /*table.columns.adjust().draw();*/
                        // });
                        //
                        // $('.list-accounts').select2();

                    });

                </script>
@endsection
