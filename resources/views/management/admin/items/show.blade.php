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
                        <h3 style="font-size: 20px; font-weight: bold; padding-bottom: 20px; padding-top: 10px;">Ushqimi: #{{$item->name}}</h3>
                    </div>
                    <!-- <div class="col-md-10 mx-auto px-5 py-5"> -->
                    <div class="col-md-10">
                        <div class="text-left" style=" border: 1px solid #dee2e6;
                                margin: 0px;
                                padding: 0px;">
                            <div class="col-md-12 border-bottom">
                                <div class="row">
                                    <div class="col-md-3" style="background-color: #79a20642;
                                            border-bottom: 1px solid #79a20642;"><h4 style="font-size: 17px; font-weight: bold; padding: 8px 15px;">Emri</h4></div>
                                    <div class="col-md-6 border-left"><h4 style="font-size: 15px; font-weight: 500; padding: 8px 15px;"> {{$item->name}}</h4></div>
                                </div>
                            </div>
                            <div class="col-md-12 border-bottom">
                                <div class="row">
                                    <div class="col-md-3" style="background-color: #79a20642;
                                            border-bottom: 1px solid #79a20642;"><h4 style="font-size: 17px; font-weight: bold; padding: 8px 15px;">Qmimi</h4></div>
                                    <div class="col-md-6 border-left"><h4 style="font-size: 15px; font-weight: 500; padding: 8px 15px;"> {{$item->price}}</h4></div>
                                </div>
                            </div>
                            @if($item->prepared == 0)
                            <div class="col-md-12 border-bottom">
                                <div class="row">
                                    <div class="col-md-3" style="background-color: #79a20642;
                                            border-bottom: 1px solid #79a20642;"><h4 style="font-size: 17px; font-weight: bold; padding: 8px 15px;"> Sasia ne stok</h4></div>
                                    <div class="col-md-6 border-left"><h4 style="font-size: 15px; font-weight: 500; padding: 8px 15px;">{{$item->stock}}</h4></div>
                                </div>
                            </div>
                            @endif
                            <div class="col-md-12 border-bottom">
                                <div class="row">
                                    <div class="col-md-3" style="background-color: #79a20642;
                                            border-bottom: 1px solid #79a20642;"><h4 style="font-size: 17px; font-weight: bold; padding: 8px 15px;">Kategoria</h4></div>
                                    <div class="col-md-6 border-left"><h4 style="font-size: 15px; font-weight: 500; padding: 8px 15px;"> {{$item->category->name}}</h4></div>
                                </div>
                            </div>
                            <div class="col-md-12 border-bottom">
                                <div class="row">
                                    <div class="col-md-3" style="background-color: #79a20642;
                                            border-bottom: 1px solid #79a20642;"><h4 style="font-size: 17px; font-weight: bold; padding: 8px 15px;">Perberesit</h4></div>
                                    <div class="col-md-6 border-left"><h4 style="font-size: 15px; font-weight: 500; padding: 8px 15px;"> </h4></div>
                                </div>
                            </div>
                            <div class="col-md-12 border-bottom">
                                <div class="row">
                                    <div class="col-md-3" style="background-color: #79a20642;
                                            border-bottom: 1px solid #79a20642;"><h4 style="font-size: 17px; font-weight: bold; padding: 8px 15px;">Pergaditet </h4></div>
                                    <div class="col-md-6 border-left"><h4 style="font-size: 15px; font-weight: 500; padding: 8px 15px;">
                                            @if($item->prepared==1)
                                                <i class="fa fa-check"></i>
                                            @else
                                                <i class="fa fa-times"> </i>
                                            @endif
                                        </h4></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-10 text-right" style="margin-left: 0px; padding-top: 20px;">
                        <a href="" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"> Edito</i></a>
                        <a href="{{route('item.destroy', $item)}}" class="btn btn-danger"><i class="fa fa-delete"> Fshije</i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ndrysho</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-left">
                        <form method="POST" action="{{route('item.update', $item)}}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Emri:</label>
                                <input type="text" class="form-control" name="name" value="{{$item->name}}">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Qmimi:</label>
                                <input type="text" class="form-control" name="price" value="{{$item->price}}">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Sasia ne stock:</label>
                                <input type="text" class="form-control" name="stock" value="{{$item->stock}}">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Kategoria:</label>
                                <select class="form-control" name="category">
                                  @foreach($categories as $category)
                                        <option value="{{$category->id}}" @if($item->category->id == $category->id)selected @endif> {{$category->name}}</option>
                                      @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Pergaditet:</label>
                                <select class="form-control" name="prepared">
                                    <option value="0" @if($item->prepared == 0)selected @endif> Jo </option>
                                    <option value="1" @if($item->prepared == 1)selected @endif> Po </option>
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
