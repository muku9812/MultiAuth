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
                    <h1>Category List</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary" href="{{route('category.create')}}">Add Category</a>

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

                <table id="datatable" class="table table-striped" style="width:100% " >
                    <thead>
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Status</th>
                        <td>Action</td>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($data['rows'] as $i => $row)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>{{$row->title}}</td>
                            <td>
                                @if($row->status==1)
                                    <p style="color:Green">Active</p>
                                @else
                                    <p style="color:red">Deactive</p>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('category.show',$row->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a href="{{route('category.edit',$row->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                                <form action="{{route('category.destroy',$row->id)}}" method="post" class="d-inline">
                                    <input type="hidden" name="_method" value="delete" />
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>

                                </form>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->


@endsection

