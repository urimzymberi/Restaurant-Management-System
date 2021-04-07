@extends('management.layouts.layout')
@section('content')
<section class="main-admin-restaurant">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2 text-left">
                <h2>Insert user</h2>
            </div>
            <form method="POST" action="{{route('user.store')}}" enctype="multipart/form-data">
                @csrf
            <div class=" bg-lights">
                <div class="col-md-10 mx-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label pt-2">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text"  class="form-control" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label-2 pn">Personal number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="personal_number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="exampleFormControlFile1" class="col-sm-3 col-form-label-2 pn">Photo</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label pt-2">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email"  class="form-control" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="staticTel" class="col-sm-3 col-form-label-2 pt-2">Tel</label>
                                    <div class="col-sm-9">
                                        <input type="text"  class="form-control" name="phone_number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label-2 pt-2">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label-2 pn">Confirm Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="staticActive" class="col-sm-3 col-form-label-2 pt-2">Active</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="active">
                                            <option value="1">True</option>
                                            <option value="0">False</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="staticRole" class="col-sm-3 col-form-label-2 pt-2">Role</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="role">
                                            <option value="1">Admin</option>
                                            <option value="2">Waiter</option>
                                            <option value="3">Chief</option>
                                            <option value="4">User</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 border-top pt-3 text-right">
                                <button type="submit" class="btn btn-dark btn-lg">Save</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>
<!-- All modals -->
@endsection
