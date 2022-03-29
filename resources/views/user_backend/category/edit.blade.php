
@extends('user_backend.layouts.master')

@section('title', 'Dashboard Page')

@section('css')


@endsection

@section('js')

@endsection

@section('js')
@endsection

@section('blank page')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Category</h1>
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

                <form action="{{route('category.update',$data['row']->id)}}" method='POST'  id="regForm">
                    <input type="hidden" name="_method" value="PUT"/>
                    @csrf
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control"  name="title" id="title" value="{{$data['row']->title}}" >
                        @error('title')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


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
        </div>
    </section>
    <!-- /.content -->


@endsection



