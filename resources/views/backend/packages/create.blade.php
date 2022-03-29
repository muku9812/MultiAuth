
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
                    <h1>Add Package</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{route('packages.index')}}" class="btn btn-primary float-sm-right">List</a>
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

                <form action="{{route('package.store')}}" method='POST'  id="regForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" placeholder="Enter package name " name="name" id="name" value="{{old('name')}}" >
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="features">Features</label>
                        <textarea  class="form-control" name="features" id="features" ></textarea>
                        @error('features')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="number" class="form-control" placeholder="Enter duration " name="duration" id="duration" value="{{old('duration')}}" >
                        @error('duration')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" placeholder="Enter Package price " name="price" id="price" value="{{old('price')}}" >
                        @error('price')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

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
                        <input type="number" class="form-control" name="created_by" id="created_by" value="{{auth()->user()->id}}" hidden >
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

