
@extends('user_backend.layouts.master')

@section('title', 'Dashboard Page')

@section('css')


@endsection





@section('blank page')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Job</h1>
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

                <form action="{{route('job.update',$data['row']->id)}}" method='POST'  id="regForm">
                    <input type="hidden" name="_method" value="PUT"/>
                    @csrf

                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 form-group">
                                <label class="text-dark" for="title">Job Title</label>
                                <input type="text" class="form-control item" placeholder="Enter job title " name="title" id="title" value="{{$data['row']->title}}" >
                                @error('title')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                {{--            <div class="form-group">--}}
                                <label for="working_position" class="text-dark">Working position</label>
                                <input type="text" class="form-control" placeholder="Enter working position " name="working_position" id="working_position" value="{{$data['row']->working_position}}" >
                                @error('working_position')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <label for="country" class="text-dark">Country</label>
                                <select name="country" class="form-control" id="country">
                                    <option value="{{$data['row']->country}} ">{{$data['row']->country}} </option>
                                    {{--                        @foreach( $data['row'] as $category)--}}
                                    <option value="Dubai">Dubai</option>
                                    {{--                        @endforeach--}}
                                </select>
                                @error('country')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <label for="minimum_qualification" class="text-dark">Minimum qualification</label>
                                <select name="minimum_qualification" class="form-control" id="minimum_qualification">
                                    <option value="{{$data['row']->minimum_qualification}}">{{$data['row']->minimum_qualification}}</option>
                                    {{--                        @foreach( $data['row'] as $category)--}}
                                    <option value="S.L.C">S.L.C</option>
                                    {{--                        @endforeach--}}
                                </select>
                                @error('minimum_qualification')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 form-group">
                                <label class="text-dark" for="company_name">Company Name</label>
                                <input type="text" class="form-control item" placeholder="Enter company name " name="company_name" id="company_name" value="{{$data['row']->company_name}}" >
                                @error('company_name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <label for="job_type" class="text-dark">Job Type</label>
                                <select name="jtype_id" class="form-control" id="jtype_id">
                                    <option value="{{$data['row']->jtype}} ">{{$data['row']->jtype}} </option>
                                    @foreach( $data['jtype'] as $jtype)
                                        <option value="{{$jtype->id}}">{{$jtype->name}}</option>
                                    @endforeach
                                </select>
                                @error('country')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="salary" class="text-dark">Country Wise Salary</label>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <input type="number" class="form-control" placeholder="Enter salary as per Nepal Currency" name="salary_rs" id="salary_rs" value="{{$data['row']->salary_rs}}" >
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <input type="text" class="form-control" placeholder="Enter salary as Per Abroad Currency " name="salary_abroad_currency" id="salary_abroad_currency" value="{{$data['row']->salary_abroad_currency}}" >

                                    @error('salary_rs')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    @error('salary_abroad_currency')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{--category start--}}
                            <div class="form-group">
                                <label for="category_id" class="text-dark">Category</label>
                                <select name="category_id" class="form-control" id="category_id">
                                    <option value="{{$data['row']->category}} ">{{$data['row']->category}}</option>
                                        <option value=" "></option>
                                </select>
                                @error('category_id')
                                <p class="text-danger">{{ "please select the Category" }}</p>
                                @enderror
                            </div>
                            {{--category end--}}

                            {{-- additional_information start--}}
                            <div class="form-group">
                                <label for="additional_information">Additional Information</label>
                                <textarea type="text" class="form-control" name="additional_information" id="additional_information"  >{{$data['row']->additional_information}}</textarea>
                                @error('additional_information')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- additional_information end--}}


                            {{-- image start--}}
                            <div class="form-group">
                                <label for="cv">Upload demand</label>
                                <input type="file" class="form-control"   name="cv" id="cv" value="{{old('cv')}}" >
                                @error('cv')
                                <p class="text-danger">{{ "please Upload Demand" }}</p>
                                @enderror
                            </div>
                            {{-- image end--}}

                            {{-- expire_date start--}}
                            <div class="form-group">
                                <label for="expire_date">Expire On</label>
                                <input type="date" class="form-control" placeholder="Select Expire date for Adds" name="expire_date" id="expire_date" min="<?php echo date("Y-m-d"); ?>"  value="{{$data['row']->expire_date}}" >
                                @error('expire_date')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- expire_date end--}}

                            {{-- status start--}}
                            <div class="form-group">
                                <label for="status" class="col-sm-2">Status </label>
                                @if($data['row']->status == 0)
                                <div class="form-check form-check-inline">
                                    <input  type="radio"  name='status' id="active" value="1" >Active
                                    <input  type="radio" name='status' id="deactive" value="0" checked> Deactive

                                </div>
                                @else
                                    <div class="form-check form-check-inline">
                                        <input  type="radio"  name='status' id="active" value="1"  checked>Active
                                        <input  type="radio" name='status' id="deactive" value="0"> Deactive

                                    </div>
                                @endif

                                @error('status')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- status end--}}
                            <div class="form-group">
                                <input type="number" class="form-control" name="created_by" id="created_by" value="{{auth()->user()->id}}" hidden >
                            </div>

                            <div class="form-group">
                                <input type="submit" value="save" class="btn btn-primary">

                            </div>
                        </div>
                    </div>
                </form>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->


@endsection


@section('js')
    <script>

        CKEDITOR.replace( 'additional_information' );
    </script>
@endsection
