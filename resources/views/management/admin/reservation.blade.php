@extends('management.layouts.layout')
@section('content')

    <section class="main-admin-restaurant">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2 text-left">
                    <h2>Rezervimet</h2>
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
                                    <th class="pro-quantity">Numri i personave</th>
                                    <th class="pro-quantity"> Data ora</th>
                                    <th class="pro-quantity">Tavolina</th>
                                    <th class="pro-remove"> </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($reservations as $r)
                                    <tr>
                                        <td class="item-id">
                                            {{$r->id}}
                                        </td>
                                        <td class="item-fullname">
                                            <h4>{{$r->user->name}}</h4>
                                        </td>
                                        <td class="item-email">
                                            <h4>{{$r->user->email}}</h4>
                                        </td>
                                        <td class="item-phone_number">
                                            <h4>{{$r->guest_number}}</h4>
                                        </td>
                                        <td class="item-deta">
                                            <h4>{{\Carbon\Carbon::parse($r->date_time)->format('Y.m.d H:i:s')}}</h4>
                                        </td>
                                        <td class="item-active">
                                            <h4> @if($r->table){{$r->table->id}}
                                            @endif
                                            </h4>
                                        </td>
                                        <td class="item-action">
                                            <a href="" class="btn btn-light btn-lg" data-toggle="modal" data-target="#exampleModal{{$r->id}}" data-id="{{$r->id}}"><i class="fa fa-edit" style=""></i></a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal{{$r->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Rezervimi {{$r->id}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    <form method="POST" action="{{route('reservation.update',$r)}}">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Numri i telefonit:</label>
                                                            <input type="text" class="form-control" name="phone_number" value="{{$r->user->phone_number}}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-form-label"> Komenti</label>
                                                            <input type="text" class="form-control" name="koment" value="{{$r->comment}}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-form-label"> Tavolina </label>
                                                            <select class="form-control text-center" name="table_id">
                                                                @foreach($tables as $table)
                                                                    <option class="text-center" value="{{$table->id}}">
                                                                        {{$table->id}}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fshi</button>
                                                            <button type="submit" class="btn btn-primary">Ruaj</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
