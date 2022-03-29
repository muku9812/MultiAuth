
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
                    <h1>{{$data['row']->duration}} Years Package Details</h1>
                </div>
                <div class="col-10 float-sm-right">
                    <a href="{{route('packages.edit',$data['row']->id)}}" class="btn btn-primary btn-sm">Edit</a>

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
                            <th>Name</th>
                            <td>{{$data['row']->name}}</td>
                        </tr>
                        {{--                        Name end--}}


                        {{--                        slug start--}}
                        <tr>
                            <th>Duration</th>
                            <td>{{$data['row']->duration}} Years</td>
                        </tr>
                        {{--                        slug end--}}


                        {{--                        meta_description start--}}
                        <tr>
                            <th>Features</th>
                            <td>{!! $data['row']->features!!}</td>
                        </tr>
                        {{--                        meta_description end--}}


                        {{--                        meta_description start--}}
                        <tr>
                            <th>Price</th>
                            <td>Rs.{{$data['row']->price}}  </td>
                        </tr>
                        {{--                        meta_tag end--}}
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

