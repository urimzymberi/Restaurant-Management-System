@extends('management.layouts.layout')
@section('content')

    <section class="main-admin-restaurant">
        <div class="container mt-2">
            <div class="row">
                <div class="col-md-10 mt-4 text-left">
                    <h2>Perdoruesit</h2>
                </div>
                <div class="col-md-2 mt-4 text-right">
                    <a href="{{route('user.create')}}" class="btn btn-dark"> Krijo</a>
                </div>
                <div class=" bg-lights">
                    <div class="col-md-12 text-left">

                    </div>
                    <div class="col-md-12 mx-auto">
                        <div class="table-responsive">
                            <table class="table table-bordered cart-table">
                                <thead style="background-color: #79a20642;">
                                <tr>
                                    <th class="pro-id">#</th>
                                    <th class="pro-thumbnail">Emri</th>
                                    <th class="pro-price">Emaili</th>
                                    <th class="pro-quantity">Numri telefonit</th>
                                    <th class="pro-quantity">Data</th>
                                    <th class="pro-subtotal">Aktiv</th>
                                    <th class="pro-remove">Roli</th>
                                    <th class="pro-remove"> </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td class="item-id">

                                    </td>
                                    <td class="item-fullname">
                                        <h4>{{$user->name}}</h4>
                                    </td>
                                    <td class="item-email">
                                        <h4>{{$user->email}}</h4>
                                    </td>
                                    <td class="item-phone_number">
                                        <h4>{{$user->phone_number}}</h4>
                                    </td>
                                    <td class="item-deta">
                                        <h4>1/20/2021</h4>
                                    </td>
                                    <td class="item-active">
                                        @if($user->active == 1)
                                            <i class="fa fa-check"> </i>
                                        @else
                                            <i class="fa fa-times"></i>
                                        @endif
                                        <h4></h4>
                                    </td>
                                    <td class="item-personal_number">
                                        <h4>{{$user->getRoleNames()->first()}}</h4>
                                    </td>

                                    <td class="item-action">
                                        <a href="{{route('user.show', $user->id)}}" class="btn btn-light btn-lg"><i class="fa fa-eye" style=""></i></a>
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
