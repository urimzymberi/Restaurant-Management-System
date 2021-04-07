@extends('management.layouts.layout')
@section('content')
    <section class="main-admin-restaurant">
        <div class="container">
            <div class="row mt-3">
                <div class=" bg-lights"
                     style="
                       width: 100%;
                       border-radius: 15px;
                       background-color: #fff !important;
                       padding: 15px;
                       margin-bottom: 30px;
                       box-shadow: 0 5px 15px rgba(0, 0, 0, 0.25);
                    "
                >
                    <div class="col-md-12 text-left">
                        <h3 style="font-size: 20px; font-weight: bold; padding-bottom: 20px; padding-top: 10px;">Perdoruesi: #{{$user->name}}</h3>
                    </div>
                    <!-- <div class="col-md-10 mx-auto px-5 py-5"> -->
                    <div class="col-md-10">
                        <div class="text-left" style=" border: 1px solid #dee2e6;
                                margin: 0px;
                                padding: 0px;">
                            <div class="col-md-12 border-bottom">
                                <div class="row">
                                    <div class="col-md-3" style="background-color: #79a20642;
                                            border-bottom: 1px solid #79a20642;"><h4 style="font-size: 17px; font-weight: bold; padding: 8px 15px;">Emri i plote</h4></div>
                                    <div class="col-md-6 border-left"><h4 style="font-size: 15px; font-weight: 500; padding: 8px 15px;">{{$user->name}}</h4></div>
                                </div>
                            </div>
                            <div class="col-md-12 border-bottom">
                                <div class="row">
                                    <div class="col-md-3" style="background-color: #79a20642;
                                            border-bottom: 1px solid #79a20642;"><h4 style="font-size: 17px; font-weight: bold; padding: 8px 15px;">Numri personal</h4></div>
                                    <div class="col-md-6 border-left"><h4 style="font-size: 15px; font-weight: 500; padding: 8px 15px;">{{$user->personal_number}}</h4></div>
                                </div>
                            </div>
                            <div class="col-md-12 border-bottom">
                                <div class="row">
                                    <div class="col-md-3" style="background-color: #79a20642;
                                            border-bottom: 1px solid #79a20642;"><h4 style="font-size: 17px; font-weight: bold; padding: 8px 15px;"> Emaili</h4></div>
                                    <div class="col-md-6 border-left"><h4 style="font-size: 15px; font-weight: 500; padding: 8px 15px;">{{$user->email}}</h4></div>
                                </div>
                            </div>
                            <div class="col-md-12 border-bottom">
                                <div class="row">
                                    <div class="col-md-3" style="background-color: #79a20642;
                                            border-bottom: 1px solid #79a20642;"><h4 style="font-size: 17px; font-weight: bold; padding: 8px 15px;">Numri i telefonit</h4></div>
                                    <div class="col-md-6 border-left"><h4 style="font-size: 15px; font-weight: 500; padding: 8px 15px;">{{$user->phone_number}}</h4></div>
                                </div>
                            </div>
                            <div class="col-md-12 border-bottom">
                                <div class="row">
                                    <div class="col-md-3" style="background-color: #79a20642;
                                            border-bottom: 1px solid #79a20642;"><h4 style="font-size: 17px; font-weight: bold; padding: 8px 15px;">Data e regjistrimit:</h4></div>
                                    <div class="col-md-6 border-left"><h4 style="font-size: 15px; font-weight: 500; padding: 8px 15px;">{{$user->created_at->format('d.m.Y')}}</h4></div>
                                </div>
                            </div>
                            <div class="col-md-12 border-bottom">
                                <div class="row">
                                    <div class="col-md-3" style="background-color: #79a20642;
                                            border-bottom: 1px solid #79a20642;"><h4 style="font-size: 17px; font-weight: bold; padding: 8px 15px;">Aktiv</h4></div>
                                    <div class="col-md-6 border-left"><h4 style="font-size: 15px; font-weight: 500; padding: 8px 15px;">
                                            @if($user->active==1)
                                                <i class="fa fa-check"></i>
                                            @else
                                            <i class="fa fa-times"> </i>
                                            @endif
                                        </h4></div>
                                </div>
                            </div>
                            <div class="col-md-12 border-bottom">
                                <div class="row">
                                    <div class="col-md-3" style="background-color: #79a20642;
                                            border-bottom: 1px solid #79a20642;"><h4 style="font-size: 17px; font-weight: bold; padding: 8px 15px;">Roli</h4></div>
                                    <div class="col-md-6 border-left"><h4 style="font-size: 15px; font-weight: 500; padding: 8px 15px;">{{$user->getRoleNames()->first()}}</h4></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 text-right" style="margin-left: 0px; padding-top: 20px;">
                        <a href="" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"> Edito perdoruesin</i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ndrysho te dhenat e perdoruesit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-left">
                        <form method="POST" action="{{route('user.update', $user->id)}}">
                            @csrf
                            @method('PATCH')
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Emri </label>
                                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Emaili</label>
                                <input type="text" class="form-control" name="email" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Numri i telefonit:</label>
                                <input type="text" class="form-control" name="phone_number" value=" {{$user->phone_number}}">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Passwordi:</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Aktiv:</label>
                                <select class="form-control" name="active">
                                    <option value="1" @if($user->active==1)selected @endif> Po</option>
                                    <option value="0" @if($user->active==0)selected @endif>  Jo</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Roli:</label>
                                <select class="form-control" name="role">
                                    <option value="1">Admin</option>
                                    <option value="2">Waiter</option>
                                    <option value="3">Chief</option>
                                    <option value="4">Client</option>
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
    </section>
@endsection
