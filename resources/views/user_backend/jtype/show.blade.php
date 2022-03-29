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
                    <h1>Category Details</h1>
                </div>
                <div class="col-10 float-sm-right">
                    <a href="{{route('category.edit',$data['row']->id)}}" class="btn btn-primary btn-sm">Edit</a>

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

                <table class="table table-bordered">
                    {{--                        Name start--}}
                    <tr>
                        <th>Title</th>
                        <td>{{$data['row']->name}}</td>
                    </tr>
                    {{--                        Name end--}}

                    {{--                        status end--}}
                    <tr>
                        <th>Status</th>
                        <td>
                            @if($data['row']->status==1)
                                <p style="color:Green">Active</p>
                            @else
                                <p style="color:red">Deactive</p>
                            @endif
                        </td>
                    </tr>
                    {{--                        Status end--}}

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

