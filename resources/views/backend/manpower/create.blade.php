
@extends('backend.layouts.master')

@section('title', 'Dashboard Page')

@section('css')


@endsection

@section('js')


@endsection

@section('blank page')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Manpower</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{route('manpower.index')}}" class="btn btn-primary float-sm-right">List</a>
{{--                    <ol class="breadcrumb float-sm-right">--}}
{{--                        <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                        <li class="breadcrumb-item active">Blank Page</li>--}}
{{--                    </ol>--}}
                </div>
            </div>
            <!-- Content Row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection

@section('main-content')


{{--        <!-- Default box -->--}}
{{--        <div class="card col-8">--}}

            <div class="card-body">

                <form action="{{route('manpower.store')}}" method='POST'  id="regForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" placeholder="Enter manpower name " name="name" id="name" value="{{old('name')}}" >
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">

                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Your Adddress" value="{{old('address')}}" >
                        @error('address')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" placeholder="Enter phone " name="phone" id="phone" value="{{old('phone')}}" >
                        @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email " name="email" id="email" value="{{old('email')}}" >
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" placeholder="Enter website " name="website" id="website" value="{{old('website')}}" >
                        @error('website')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="contact_person">Contact Person</label>
                        <input type="text" class="form-control" placeholder="Enter contact person name " name="contact_person" id="contact_person" value="{{old('contact_person')}}" >
                        @error('contact_person')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" placeholder="Enter Mobile number " name="mobile_number" id="mobile_number" value="{{old('mobile_number')}}" >
                        @error('mobile')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{--Package start--}}
                    <div class="form-group">
                        <label for="package_id" class="control-label">Package</label>
                        <select name="package_id" class="form-control" id="package_id">
                            <option value=" ">Select Package</option>
                        @foreach( $data['row'] as $package)
                                <option value="{{$package->id}}">{{$package->name}}</option>
                            @endforeach
                        </select>
                        @error('package_id')
                        <p class="text-danger">{{ "please select the package" }}</p>
                        @enderror
                    </div>
                    {{--package end--}}


                    <div class="form-group">
                        <label for="status">Status</label>
                        <div class="form-check form-check-inline">
                            <div style="padding-right: 10px;">
                            <input type="radio"  name='status' id="status" value="1">Active
                            </div>
                            <input  type="radio" name='status' id="status" value="0" checked>
                            Deactive
                        </div>
                        @error('status')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" value="save" class="btn btn-primary">

                    </div>
                </form>
                <!-- /.card-body -->
                <div class="card-footer">

                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
{{--        </div>--}}


@endsection

