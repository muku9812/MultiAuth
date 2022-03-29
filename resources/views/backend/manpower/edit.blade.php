
@extends('backend.layouts.master')

@section('title', 'Dashboard Page')

@section('css')


@endsection

@section('js')
    <script>
        CKEDITOR.replace( 'features' );
    </script>
@endsection

@section('blank page')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Manpower Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
            <!-- Content Row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection

@section('main-content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">

            <div class="card-body">

                <form action="{{route('manpower.update',$data['row']->id)}}" method='POST'  id="regForm">
                    <input type="hidden" name="_method" value="PUT"/>
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$data['row']->name}}" >
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="name" value="{{$data['row']->address}}" >
                        @error('address')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" value="{{$data['row']->phone}}" >
                        @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{$data['row']->email}}" >
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" name="text" id="text" value="{{$data['row']->website}}" >
                        @error('website')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="contact_person">Contact Person</label>
                        <input type="text" class="form-control" name="contact_person" id="contact_person" value="{{$data['row']->contact_person}}" >
                        @error('contact_person')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="mobile_number">Mobile Number</label>
                        <input type="text" class="form-control" name="mobile_number" id="mobile_number" value="{{$data['row']->mobile_number}}" >
                        @error('mobile_number')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{--Package start--}}
                    <div class="form-group">
                        <label for="package_id" class="control-label">Package</label>
                        <select name="package_id" class="form-control" id="package_id">
                            <option value="{{$data['row']->package_id}}">{{$data['row']->PackageId->name}}</option>
{{--                            @foreach( $data['row'] as $package)--}}
{{--                                <option value="{{$package->package_id}}">{{$package->PackagesId->name}}</option>--}}
{{--                            @endforeach--}}
                        </select>
                        @error('package_id')
                        <p class="text-danger">{{ "please select the package" }}</p>
                        @enderror
                    </div>
                    {{--package end--}}

                    <div class="form-group">
                        <label for="status">Status</label>
                        @if($data['row']->status==0)
                            <div class="form-check form-check-inline">
                                <div style="padding-right: 10px;">
                                    <input type="radio"  name='status' id="status" value="1">Active
                                </div>
                                <input  type="radio" name='status' id="status" value="0" checked>
                                Deactive
                            </div>
                        @else
                            <div class="form-check form-check-inline">
                                <div style="padding-right: 10px;">
                                    <input type="radio"  name='status' id="status" value="1" checked>Active
                                </div>
                                <input  type="radio" name='status' id="status" value="0" >
                                Deactive
                            </div>
                        @endif
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
        </div>
    </section>
    <!-- /.content -->


@endsection

