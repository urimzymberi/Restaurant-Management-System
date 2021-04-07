@extends('management.layouts.layout')
@section('content')

    <section class="main-admin-restaurant">
        <div class="container mt-2">
            <div class="row">
                <div class="col-md-10 mt-4 text-left">
                    <h2>Ushqimet</h2>
                </div>
                <div class="col-md-2 mt-4 text-right">
                    <a href="{{route('item.create')}}" class="btn btn-dark"> Krijo</a>
                </div>
                <div class=" bg-lights">
                    <div class="col-md-12 text-left">

                    </div>
                    <div class="col-md-12 mx-auto">
                        <div class="table-responsive">
                            <table class="table table-bordered cart-table">
                                <thead style="background-color: #79a20642;">
                                <tr>
                                    <th class="pro-thumbnail">Emri</th>
                                    <th class="pro-price">Qmimi</th>
                                    <th class="pro-quantity">Sasia</th>
                                    <th class="pro-quantity">Pergaditet</th>
                                    <th class="pro-subtotal">Kategoria</th>
                                    <th class="pro-remove"> </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                    <tr>
                                        <td class="item-fullname">
                                            <h4>{{$item->name}}</h4>
                                        </td>
                                        <td class="item-email">
                                            <h4>{{$item->price}}</h4>
                                        </td>
                                        <td class="item-phone_number">
                                            <h4>{{$item->stock}}</h4>
                                        </td>
                                        <td class="item-active">
                                            @if($item->prepared == 1)
                                                <i class="fa fa-check"> </i>
                                            @else
                                                <i class="fa fa-times"></i>
                                            @endif
                                            <h4></h4>
                                        </td>
                                        <td> {{$item->category->name}}</td>
                                        <td class="item-action">
                                            <a href="{{route('item.show', $item->id)}}" class="btn btn-light btn-lg"><i class="fa fa-eye" style=""></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
