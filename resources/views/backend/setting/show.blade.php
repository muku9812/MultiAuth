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
                        <h1>News Details</h1>
                        <h2>
                            <a href="{{route('setting.create')}}" class="btn btn-success btn-sm">Add Setting</a>
                            <a href="{{route('setting.index')}}" class="btn btn-info btn-sm">Setting List</a>
                        </h2>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                <div class="card-body">

                    <table class="table table-bordered">
                        {{--                        name start--}}
                        <tr>
                            <th>Name</th>
                            <td>{{$data['row']->name}}</td>
                        </tr>
                        {{--                        naem end--}}


                        {{--                        address start--}}
                        <tr>
                            <th>Address</th>
                            <td>{{$data['row']->address}}</td>
                        </tr>
                        {{--                        address end--}}


                        {{--                        Logo start--}}
                        <tr>
                            <th>Logo</th>
                            <td>
                                <img src="{{asset('uploads/images/setting/logo/'.$data['row']->logo)}}" height="100px" width="100px" alt="Logo">
                            </td>
                        </tr>
                        {{--                        Logo end--}}


                        {{--                        fav_icon start--}}
                        <tr>
                            <th>Fav Icon</th>
                            <td>
                                <img src="{{asset('uploads/images/setting/fav_icon/'.$data['row']->fav_icon)}}" height="100px" width="100px" alt="fav_icon">
                            </td>
                        </tr>
                        {{--                        fav_icon end--}}



                        {{--                        pam_vat start--}}
                        <tr>
                            <th>Pam VAT</th>
                            <td>{{$data['row']->pam_vat}}</td>
                        </tr>
                        {{--                        pam_vat end--}}


                        {{--                        reg_no start--}}
                        <tr>
                            <th>Reg.NO</th>
                            <td>{{$data['row']->reg_no}} </td>
                        </tr>
                        {{--                        reg_no end--}}


                        {{--                        facebook start--}}
                        <tr>
                            <th>Facebook</th>
                            <td>
                                {{$data['row']->facebook}}
                            </td>
                        {{--                      facebook end--}}

                        {{--                        youtube start--}}
                        <tr>
                            <th>Youtube</th>
                            <td>
                                {{$data['row']->youtube}}
                            </td>
                        {{--                       youtube end--}}

                        {{--                        twitter start--}}
                        <tr>
                            <th>Twitter</th>
                            <td>
                                {{$data['row']->twitter}}
                            </td>
                        {{--                       twitter end--}}

                        {{--                        gmail start--}}
                        <tr>
                            <th>G-mail</th>
                            <td>
                                {{$data['row']->gmail}}
                            </td>
                        {{--                       gmail end--}}

                        {{--                        skype start--}}
                        <tr>
                            <th>Skype</th>
                            <td>
                                {{$data['row']->skype}}
                            </td>
                        {{--                       skype end--}}

                        {{--                        phone start--}}
                        <tr>
                            <th>Phone</th>
                            <td>
                                {{$data['row']->phone}}
                            </td>
                        {{--                       phone end--}}


                        {{--                        created_by start--}}

                        <tr>
                            <th>Created By</th>
                            <td>{{$data['row']->UserId->name}}</td>
                        </tr>
                        {{--                        created_by end--}}


                        {{--                        updated start--}}

                        <tr>
                            <th>Updated By</th>
                            <td>
                                @if( $data['row']->updated_by == Null)
                                    Not Updated Yet!!

                                @else
                                    {{ $data['row']->UpdatedId->name }}

                                @endif
                            </td>
                        </tr>
                        {{--                        updated end--}}

                        {{--                        created_at start--}}
                        </tr>
                        <tr>
                            <th>Created_At</th>
                            <td>{{$data['row']->created_at}}</td>
                        </tr>
                        {{--                        created_at end--}}


                        {{--                        Updated_At start--}}
                        <tr>
                            <th>Updated_At</th>
                            <td>{{$data['row']->updated_at}}</td>
                        </tr>
                        {{--                        Updated_At end--}}



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
