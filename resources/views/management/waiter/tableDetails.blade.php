@extends('management.layouts.layout')
@section('content')


    <section class="main-admin-restaurant">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2 text-left">
                    <h2>Tavolina {{ $table->table_no }}</h2>
                </div>
                <div class="bg-lights">
                    <div class="row pr-3">
                        <div class="col-md-6  p-1">
                            <div class="row text-left pl-3 pt-3 pr-3">
                                <div class="col-md-6 mb-2">
                                    <h4></h4>
                                </div>
                                {{--                                <div class="col-md-6 text-right">--}}
                                {{--                                    <a href="" class="adds" data-toggle="modal" data-target=".bd-example-modal-lg">--}}
                                {{--                                        <i class="fa fa-link"></i>--}}
                                {{--                                    </a>--}}
                                {{--                                    <a href="" class="adds" data-toggle="modal" data-target="#exampleModal1">--}}
                                {{--                                        <i class="fa fa-plus"></i>- -}}
                                {{--                                    </a>--}}
                                {{--                                    <a href="" class="adds" data-toggle="modal" data-target="#exampleModal">--}}
                                {{--                                        <i class="fa fa-clock-o"></i>--}}
                                {{--                                    </a>--}}
                                {{--                                </div>--}}

                                <div class="col-md-12 pt-2">
                                    <div class="table-responsive" style="overflow-y: scroll; max-height: 50vh;">
                                        <table class="table table-bordered cart-table">
                                            <thead class="text-center">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Produkti</th>
                                                <th scope="col">Çmimi</th>
                                                <th scope="col">Sasia</th>
                                                <th scope="col">Totali</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $total = 0;
                                            @endphp
                                            @if($order_id !=0)
                                                @foreach($item_orders as $item_order)

                                                    <tr>
                                                        <td class="item-remove">
                                                            <a id="{{ $item_order->id }}"
                                                               onclick="item_remove(this.id)"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </td>
                                                        <td class="item-name">
                                                            <h4><a href="#">{{ $item_order->item->name }}</a></h4>
                                                        </td>
                                                        <td class="item-price">
                                                            <h4>{{ $item_order->item->price }}</h4>
                                                        </td>
                                                        <td class="item-count">
                                                            <div class="count-input">
                                                                <a class="incr-btn" data-action="decrease"
                                                                   id="-{{ $item_order->id }}"
                                                                   onclick="item_quantity(this.id)">–</a>
                                                                <input class="quantity" type="text"
                                                                       id="quantity_{{ $item_order->id }}"
                                                                       value="{{ $item_order->quantity }}">
                                                                <a class="incr-btn" data-action="increase"
                                                                   id="+{{ $item_order->id }}"
                                                                   onclick="item_quantity(this.id)">+</a>
                                                            </div>
                                                        </td>
                                                        <td class="item-price">
                                                            <h4>{{ number_format((float)($item_order->quantity * $item_order->item->price), 2, '.', '') }}</h4>
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $total = $total + ($item_order->quantity * $item_order->item->price)
                                                    @endphp
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="cart-totals margin-b-20">
                                        <div class="cart-totals-title">
                                            <h3>Gjithsej</h3>
                                        </div>
                                        <div class="cart-totals-fields">
                                            <table class="table text-right">
                                                <tbody>
                                                <tr>
                                                    <td class="text-color"><strong></strong></td>
                                                    <td class="text-color"><strong>Totali</strong></td>
                                                    <td class="text-color"><strong
                                                            id="total">{{ number_format((float)($total), 2, '.', '') }}</strong>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="cart-buttons text-right">
                                        <a href="{{ route('tables') }}">
                                            <button class="btn btn-primary btn-lg">Tavolinat</button>
                                        </a>

                                        <button class="btn btn-primary btn-lg" data-toggle="modal"
                                                data-target=".bd-example-modal-lg" onclick="item_orders()">Paguaj
                                        </button>
                                    </div>
                                    <div class="text-right pt-3">
                                    <form action="{{ route('delete.order') }}" method="post">
                                        @csrf
                                        <button class="btn btn-primary btn-lg d-none" name="order_id" value="{{ $order_id }}">Liro Tavolinen</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6  p-1">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item tabs-dashboard nav-link active" id="nav-home-tab"
                                       data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home"
                                       aria-selected="true">All</a>
                                    @foreach($categories as $category)
                                        <a class="nav-item tabs-dashboard nav-link"
                                           id="nav-category-{{ $category->id }}-tab" data-toggle="tab"
                                           href="#nav-category-{{ $category->id }}" role="tab"
                                           aria-controls="nav-{{ $category->name }}"
                                           aria-selected="false">{{ $category->name }}</a>
                                    @endforeach
                                </div>
                            </nav>
                            <form action="">
                                @csrf
                                <div class="tab-content text-left" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                         aria-labelledby="nav-home-tab">
                                        <div class="row pt-3">

                                            @foreach($items as $item)
                                                @if($item->stock<=0)
                                                <div class="col-md-2">
                                                    <div id="{{ $item->id }}" style="opacity: 0.3" >
                                                        <div class="product-images">
                                                            <img class=" bg-image"
                                                                 src="{{ asset('assets/images').'/'.$item->image }}"
                                                                 alt="">
                                                        </div>
                                                        <p>{{$item->name}}</p>
                                                    </div>

                                                </div>
                                                @else
                                                    <div class="col-md-2">
                                                        <a id="{{ $item->id }}"  onclick="item_add(this.id)">
                                                            <div class="product-images">
                                                                <img class=" bg-image"
                                                                     src="{{ asset('assets/images').'/'.$item->image }}"
                                                                     alt="">
                                                            </div>
                                                            <p>{{$item->name}}</p>
                                                        </a>

                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    @foreach($categories as $category)
                                        <div class="tab-pane fade" id="nav-category-{{ $category->id }}" role="tabpanel"
                                             aria-labelledby="nav-profile-tab">
                                            <div class="row pt-3">

                                                @foreach($items as $item)
                                                    @if($category->id == $item->category_id)
                                                        <div class="col-md-2">
                                                            <a id="{{ $item->id }}" onclick="item_add(this.id)">
                                                                <div class="product-images">
                                                                    <img class=" bg-image"
                                                                         src="{{ asset('assets/images').'/'.$item->image }}"
                                                                         alt="">
                                                                </div>
                                                                <p>{{$item->name}}</p>
                                                                <input type="hidden" name="">
                                                            </a>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- All modals -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vendos Kohen e rezervimit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" placeholder="vendos kohen tuaj">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vendos Konsumatorin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="col-form-label">Emri i konsumatorit:</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="number" class="col-form-label">Numri i konsumatorit:</label>
                        <input type="number" class="form-control" id="number">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email i konsumatorit:</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>


    <div style="max-height: 95vh" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Faturë</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group text-center    ">
                        <img src="{{ asset('/assets/images/logo-dark.png') }}" alt="">
                        {{--                        <p for="name" class="col-form-label">888 Keyser Ridge Road <br>--}}
                        {{--                            Greensboro, NC 27401</p>--}}
                    </div>
                    <!-- <div class="form-group">
                        <p for="number" class="col-form-label">Date: 2020-12-26 19:16:04 <br>
                                                               Waiter: without Waiter <br>
                                                               Table :5</p>
                    </div> -->
                    <div class="form-group">
                        <table class="table table_paguaj">
                            <thead>
                            <tr>
                                {{--                                <th scope="col">#</th>--}}
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">SubTotal</th>
                            </tr>
                            </thead>
                            <tbody>

                            {{--                            <tr>--}}
                            {{--                                <th scope="row">1</th>--}}
                            {{--                                <td>Mark</td>--}}
                            {{--                                <td>Otto</td>--}}
                            {{--                                <td>@mdo</td>--}}
                            {{--                            </tr>--}}
                            {{--                            <tr>--}}
                            {{--                                <th scope="row">2</th>--}}
                            {{--                                <td>Jacob</td>--}}
                            {{--                                <td>Thornton</td>--}}
                            {{--                                <td>@fat</td>--}}
                            {{--                            </tr>--}}
                            {{--                            <tr>--}}
                            {{--                                <th scope="row">3</th>--}}
                            {{--                                <td>Larry</td>--}}
                            {{--                                <td>the Bird</td>--}}
                            {{--                                <td>@twitter</td>--}}
                            {{--                            </tr>--}}
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group">
                        <div class="cart-totals margin-b-20">
                            <div class="cart-totals-fields">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td class="text-color"><strong>Totali</strong></td>
                                        <td class="text-color"><strong id="modal_total_meTVSH">$00.00</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-color">TVSH</td>
                                        <td class="text-color" id="modal_TVSH">$00.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-color">Totali pa TVSH</td>
                                        <td class="text-color"id="modal_total_paTVSH">$00.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="px-3">

                            {{--                            <p class="d-block  btn-dark text-center">Thank you for your business</p>--}}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('bill_save') }}" method="Post">
                        @csrf
                        <button class="btn btn-secondary" data-dismiss="modal">Mbyll</button>
                        <button class="btn btn-primary" id="btn_order_id" name="order_id" value="{{ $order_id }}">Ruaj
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--    cart-table--}}
    <script>
        var order_id = {{ $order_id }};
        var table_id = {{ $table->id }};

        function item_add(id) {
            var item_id = id;
            var _token = $("input[name=_token]").val();
            $.ajax({
                url: "{{ route('add_item') }}",
                type: "POST",
                data: {
                    item_id: item_id,
                    order_id: order_id,
                    table_id: table_id,
                    _token: _token
                },
                success: function (response) {
                    if (response) {
                        res_order_items(response);
                    }
                }
            });
        }
    </script>

    <script>
        function item_quantity(id) {

            var item_order_id = id.substring(1);
            var quantity = parseInt($('#quantity_' + item_order_id).val());
            var _token = $("input[name=_token]").val();

            if (id.substring(0, 1) == '-') {
                if (quantity > 1) {
                    quantity = quantity - 1;
                }
            } else {
                quantity = quantity + 1;
            }


            $.ajax({
                url: "{{ route('item_quantity') }}",
                type: "POST",
                data: {
                    order_id: order_id,
                    item_order_id: item_order_id,
                    quantity: quantity,
                    _token: _token
                },
                success: function (response) {
                    if (response) {
                        res_order_items(response);
                    }
                }
            });
        }
    </script>

    <script>
        function item_remove(id) {
            var item_order_id = id;
            var _token = $("input[name=_token]").val();

            $.ajax({
                url: "{{ route('item_remove') }}",
                type: "POST",
                data: {
                    order_id: order_id,
                    item_order_id: item_order_id,
                    _token: _token
                },
                success: function (response) {
                    if (response) {
                        res_order_items(response);
                    }
                }
            });
        }
    </script>

    <script>
        var total = 0;

        function res_order_items(response) {
            total = 0;
            $(".cart-table tbody").empty();
            var response1 = response[0];
            for (var i = 0; i < response1.length; i++) {
                $('.cart-table tbody').append('<tr>\n' +
                    '                                                <td class="item-remove">\n' +
                    '                                                    <a id="' + response1[i].id + '" onclick="item_remove(this.id)"><i class="fa fa-trash"></i></a>\n' +
                    '                                                </td>\n' +
                    '                                                <td class="item-name">\n' +
                    '                                                    <h4><a href="#">' + response1[i].item.name + '</a></h4>\n' +
                    '                                                </td>\n' +
                    '                                                <td class="item-price">\n' +
                    '                                                    <h4>' + response1[i].item.price + '</h4>\n' +
                    '                                                </td>\n' +
                    '                                                <td class="item-count">\n' +
                    '                                                    <div class="count-input">\n' +
                    '                                                        <a class="incr-btn" data-action="decrease" id="' + '-' + response1[i].id + '" onclick="item_quantity(this.id)">–</a>\n' +
                    '                                                        <input class="quantity" type="text" id="quantity_' + response1[i].id + '" value="' + response1[i].quantity + '">\n' +
                    '                                                        <a class="incr-btn" data-action="increase" id="' + '+' + response1[i].id + '" onclick="item_quantity(this.id)">+</a>\n' +
                    '                                                    </div>\n' +
                    '                                                </td>\n' +
                    '                                                <td class="item-price">\n' +
                    '                                                    <h4>' + (response1[i].quantity * response1[i].item.price).toFixed(2) + '</h4>\n' +
                    '                                                </td>\n' +
                    '                                            </tr>')

                total = total + (response1[i].quantity * response1[i].item.price);
            }

            $('#total').html(total.toFixed(2));
            order_id = response[1];
            $('#btn_order_id').val(response[1]);
        }
    </script>

    <script>

        function item_orders() {
            var _token = $("input[name=_token]").val();


            $.ajax({
                url: "{{ route('item_orders') }}",
                type: "POST",
                data: {
                    order_id: order_id,
                    _token: _token
                },
                success: function (response) {
                    if (response) {

                        total = 0;
                        $(".table_paguaj tbody").empty();
                        for (var i = 0; i < response.length; i++) {
                            $('.table_paguaj tbody').append('<tr>'
                                + '<td>' + response[i].item.name + '</td>'
                                + '<td>' + (response[i].item.price) + '</td>'
                                + '<td>' + response[i].quantity + '</td>'
                                + '<td>' + (response[i].quantity * response[i].item.price).toFixed(2) + '</td>'
                                + '</tr>')

                            total = total + (response[i].quantity * response[i].item.price);
                        }

                        $('#modal_total_meTVSH').html(total.toFixed(2));
                        $('#modal_total_paTVSH').html((total-((total*8)/100)).toFixed(2));
                        $('#modal_TVSH').html(((total*8)/100).toFixed(2));
                    }
                }
            });
        }
    </script>
@endsection
