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
                    <h1>Job Details</h1>
                </div>
                <div class="col-10 float-sm-right">
                    <a href="{{route('job.edit',$data['row']->id)}}" class="btn btn-primary btn-sm">Edit</a>

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
                    {{--                        Title start--}}
                    <tr>
                        <th>Title</th>
                        <td>{{$data['row']->title}}</td>
                    </tr>
                    {{--                        Title end--}}

                    {{--                        country start--}}
                    <tr>
                        <th>Country</th>
                        <td>{{$data['row']->countryId->name}}</td>
                    </tr>
                    {{--                        country end--}}

                    {{--                        working Position start--}}
                    <tr>
                        <th>Working Position</th>
                        <td>{{$data['row']->working_position}}</td>
                    </tr>
                    {{--                        working Position end--}}

                    {{--                       male demand start--}}
                    <tr>
                        <th>Male worker demand</th>
                        <td>{{$data['row']->male_demand}}</td>
                    </tr>
                    {{--                       male demand end--}}


                    {{--                       male demand start--}}
                    <tr>
                        <th>Female worker demand</th>
                        <td>{{$data['row']->female_demand}}</td>
                    </tr>
                    {{--                       male demand end--}}


                    {{--                       minimum_qualification start--}}
                    <tr>
                        <th>Minimum qualification</th>
                        <td>{{$data['row']->qualificationId->name}}</td>
                    </tr>
                    {{--                      minimum_qualification end--}}


                    {{--                       salary_rs start--}}
                    <tr>
                        <th>Salary in Rupee</th>
                        <td>{{$data['row']->salary_rs}}</td>
                    </tr>
                    {{--                      salary_rs end--}}

                    {{--                       salary_abroad_currency start--}}
                    <tr>
                        <th>Salary as per abroad currency</th>
                        <td>{{$data['row']->salary_abroad_currency}}</td>
                    </tr>
                    {{--                      salary_abroad_currency end--}}

                    {{--                       salary_abroad_currency start--}}
                    <tr>
                        <th>Salary as per abroad currency</th>
                        <td>{{$data['row']->salary_abroad_currency}}</td>
                    </tr>
                    {{--                      salary_abroad_currency end--}}

                    {{--                       salary_abroad_currency start--}}
                    <tr>
                        <th>Vacancy Expire date</th>
                        <td>{{$data['row']->expire_date}}</td>
                    </tr>
                    {{--                      salary_abroad_currency end--}}

                    {{--                       additional_information start--}}
                    <tr>
                        <th>Additional Information</th>
                        <td>{!! $data['row']->additional_information !!}</td>
                    </tr>
                    {{--                      additional_information end--}}

                    {{--                       Category start--}}
                    <tr>
                        <th>Category</th>
                        <td> {{ $data['row']->CategoryId->title}}</td>
                    </tr>
                    {{--                      Category end--}}


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

            </div>
            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->


@endsection

