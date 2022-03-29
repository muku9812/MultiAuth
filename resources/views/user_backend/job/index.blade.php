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
                    <h1>Job List</h1>
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
    <section class="content">

        <!-- Default box -->
        <div class="card">

            <div class="card-body">

                <table id="datatable" class="table " style="width:100% " >
                    <thead>
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>working Position</th>
                        <th>Country</th>
                        <th>Expire date</th>
                        <th>Status</th>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['rows'] as $i => $row)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>{{$row->title}}</td>
                            <td>{{$row->working_position}}</td>
                            <td>{{$row->country}}</td>
                            <td>{{$row->expire_date}}</td>
                            <td>
                                @if($row->status==1)
                                    <p style="color:Green">Active</p>
                                @else
                                    <p style="color:red">Deactive</p>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('job.show',$row->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a href="{{route('job.edit',$row->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                                <form action="{{route('job.destroy',$row->id)}}" method="post" class="d-inline">
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


@endsection
