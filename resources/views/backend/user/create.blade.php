

@extends('backend.layouts.master')

@section('title', 'Dashboard Page')

@section('css')

@endsection

@section('js')


@endsection

@section('main-content')


        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add User</h1>
                        <h2><a href="" class="btn btn-success btn-sm">User List</a></h2>

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card ">

                <div class="card-body col-sm-6">

                    <form action="{{route('user.store')}}" method='POST' enctype="multipart/form-data">
                        @csrf
                        {{--                       {{-- Name start--}}
                        <div class="form-group row">
                            <label for="name" class="col-2">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Enter User Name " name="name" id="name"  pattern="[a-zA-Z'-'\s]*"  value="{{old('name')}}" >
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        {{-- Name end--}}

                        {{-- slug start--}}
                        <div class="form-group row">
                            <label for="email" class="col-2">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Enter User Email" name="email" id="email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" value="{{old('email')}}" >
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        {{-- slug end--}}


                        {{-- password start--}}
                        <div class="form-group row">
                            <label for="password" class="col-2" >Password</label>
                            <div class="col-sm-10">
                                <input type="password" crypt="bcrypt" class="form-control" placeholder="Enter Password" name="password" id="password" value="{{old('password')}}" >
                                @error('password')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        {{-- Password end--}}

                        {{-- image start--}}
                        <div class="form-group row">
                            <label for="image_file" class="col-2">Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control"   name="image_file" id="image_file" value="{{old('image_file')}}" required>
                                @error('image_file')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        {{-- image end--}}


                        {{-- phone start--}}
                        <div class="form-group row">
                            <label for="phone" class="col-2" >Phone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"placeholder="Enter User Phone" name="phone" id="phone"  pattern="[0-9]{10}" value="{{old('phone')}}" >
                                @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        {{-- phone end--}}


                        {{-- address start--}}
                        <div class="form-group row">
                            <label for="address" class="col-2" >Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Enter User Address"   name="address" id="address" value="{{old('address')}}" required>
                                @error('address')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        {{-- address end--}}

                        <div class="form-group row">
                            <label for="status" class="col-2">Status</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input type="radio"  name='status' id="status" value="1">Active
                                    <input  type="radio" name='status' id="status" value="0" checked>
                                    Deactive
                                </div>
                                @error('status')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="save" class="btn btn-primary">
                        </div>
                    </form>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </section>
        <!-- /.content -->

@endsection
