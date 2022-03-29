
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
                    <h1>{{$data['row']->name}} Details</h1>
                </div>
                <div class="col-10 float-sm-right">
                    <a href="{{route('manpower.edit',$data['row']->id)}}" class="btn btn-primary btn-sm">Edit</a>

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


                    {{--                        address start--}}
                    <tr>
                        <th>Address</th>
                        <td>{{$data['row']->address}}</td>
                    </tr>
                    {{--                        address end--}}


                    {{--                        phone start--}}
                    <tr>
                        <th>Phone</th>
                        <td>{!! $data['row']->phone!!}</td>
                    </tr>
                    {{--                        phone end--}}


                    {{--                        email start--}}
                    <tr>
                        <th>Email</th>
                        <td>{{$data['row']->email}}  </td>
                    </tr>
                    {{--                        email end--}}
                    <tr>
                    {{--                        website start--}}
                    <tr>
                        <th>Website</th>
                        <td>{{$data['row']->website}}  </td>
                    </tr>
                    {{--                        website end--}}
                    <tr>

                    {{--                        contact_person start--}}
                    <tr>
                        <th>Contact Person</th>
                        <td>{{$data['row']->contact_person}}  </td>
                    </tr>
                    {{--                        contact_person end--}}
                    <tr>

                    {{--                        mobile_number start--}}
                    <tr>
                        <th>Mobile Number</th>
                        <td>{{$data['row']->mobile_number}}  </td>
                    </tr>
                    {{--                        mobile_number end--}}
                    <tr>

                    {{--                        mobile_number start--}}
                    <tr>
                        <th>Subscribe Package</th>
                        <td>{{$data['row']->PackageId->name}}  </td>
                    </tr>
                    {{--                        mobile_number end--}}
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

