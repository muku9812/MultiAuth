
@extends('user_backend.layouts.master')

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
                    <h1>Add Job Type</h1>
                </div>
                <div class="col-sm-6">
                    <a href="#" class="btn btn-primary float-sm-right">List</a>
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

        <form action="{{route('jtype.store')}}" method='POST'  id="regForm">
            @csrf
            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" placeholder="Enter category title " name="name" id="name" value="{{old('name')}}" >
                @error('name')
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



