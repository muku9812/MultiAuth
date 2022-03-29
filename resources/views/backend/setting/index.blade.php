@extends('backend.layouts.master')

@section('title', 'Setting create')

@section('blank page')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Setting Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('setting.index')}}">Setting</a></li>
                        <li class="breadcrumb-item active">create</li>
                    </ol>
                </div>
            </div>
            <!-- Content Row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection

@section('main-content')

    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Setting List</h1>
                        <h2><a href="{{route('setting.create')}}" class="btn btn-success btn-sm">Add Setting</a></h2>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                <div class="card-body">
                    @if(Session::has('success'))
                        <p class="alert alert-success">{{Session::get('success')}}</p>
                    @endif
                    @if(Session::has('error'))
                        <p class="alert alert-danger">{{Session::get('danger')}}</p>
                    @endif
                    <table id="datatable" class="table table-striped" style="width:100%" >
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Facebook</th>
                            <th>Youtube</th>
                            <th>Created By</th>
                            <td>Action</td>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($data['rows'] as $i => $row)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->address}}</td>
                                <td>{{$row->phone}}</td>
                                <td>{{$row->facebook}}</td>
                                <td>{{$row->youtube}}</td>
                                {{--                                <td>{!! $row->description !!}</td>--}}

                                <td>{{$row->UserId->name}}</td>
                                <td>
                                    <a href="{{route('setting.show',$row->id)}}" class="btn btn-success btn-sm">View</a>
                                    <a href="{{route('setting.edit',$row->id)}}" class="btn btn-primary btn-sm">Update</a>
                                    <form action="{{route('setting.destroy',$row->id)}}" method="post" class="d-inline">
                                        <input type="hidden" name="_method" value="delete" />
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>

                                    </form>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
