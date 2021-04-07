@extends('management.layouts.layout')
@section('content')
    <section class="main-admin-restaurant">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2 text-left">
                    <h2>Inserto ushqim</h2>
                </div>
                <div class=" bg-lights">
                    <div class="col-md-10 mx-auto">
                        <form method="POST" action="{{route('item.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-3 col-form-label-2 pt-2">Emri</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputName" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3"> Fotografi </label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control form-control-file" id="exampleFormControlFile1" name="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputIngredients" class="col-sm-3 col-form-label-2 pt-2">Perberesit</label>
                                        <div class="col-sm-9">
                                            <select multiple class="form-control" id="exampleFormControlSelect2" name="ingredients">
                                                @foreach($igredients as $ig)
                                                <option value="{{$ig->id}}">{{$ig->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-3 col-form-label-2 pt-2">Qmimi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputName" name="price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-3 col-form-label-2 pt-2">Sasia </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputName" name="stock">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-3 col-form-label-2 pt-2">Kategoria</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="category">
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}"> {{$category->name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 border-top pt-3 text-right">
                                    <button type="save" class="btn btn-dark btn-lg">Ruaj</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
s
