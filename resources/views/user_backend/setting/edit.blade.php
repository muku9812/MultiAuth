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
                        <h1>Update Setting</h1>
                        <h2>
                            <a href="{{route('setting.index')}}" class="btn btn-success btn-sm">Setting List</a>
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

                    <form action="{{route('setting.update',$data['row']->id)}}" enctype="multipart/form-data" method='POST'>
                        @csrf
                        {{--                       {{-- name start--}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control"  name="name" id="name" value="{{$data['row']->name}}" >
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- title end--}}

                        {{-- address start--}}
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control"  name="address" id="address"  value="{{$data['row']->address}}" >
                            @error('address')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- address end--}}

                        {{-- pam_vat start--}}
                        <div class="form-group">
                            <label for="pam_vat">Pam VAT</label>
                            <input type="text" class="form-control"  name="pam_vat" id="pam_vat"  value="{{$data['row']->pam_vat}}">
                            @error('pam_vat')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- pam_vat end--}}

                        {{-- reg_no start--}}
                        <div class="form-group">
                            <label for="reg_no">Reg No</label>
                            <input type="text" class="form-control"  name="reg_no" id="reg_no"  value="{{$data['row']->reg_no}}" >
                            @error('reg_no')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- reg_no end--}}

                        {{-- facebook start--}}
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" class="form-control"  name="facebook" id="facebook"  value="{{$data['row']->facebook}}" >
                            @error('facebook')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- facebook end--}}

                        {{-- youtube start--}}
                        <div class="form-group">
                            <label for="youtube">Youtube</label>
                            <input type="text" class="form-control" name="youtube" id="youtube" value="{{$data['row']->youtube}}" >
                            @error('youtube')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- youtube end--}}

                        {{-- twitter start--}}
                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" class="form-control"  name="twitter" id="twitter"  value="{{$data['row']->twitter}}" >
                            @error('twitter')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- twitter end--}}

                        {{-- gmail start--}}
                        <div class="form-group">
                            <label for="gmail">Gmail</label>
                            <input type="text" class="form-control" placeholder="Enter gmail for setting " name="gmail" id="gmail"  value="{{$data['row']->gmail}}" >
                            @error('gmail')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- gmail end--}}

                        {{-- skype start--}}
                        <div class="form-group">
                            <label for="skype">Skype</label>
                            <input type="text" class="form-control"  name="skype" id="skype"  value="{{$data['row']->skype}}">
                            @error('skype')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- skype end--}}

                        {{-- phone start--}}
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="{{$data['row']->phone}}">
                            @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- phone end--}}

                        {{-- logo start--}}
                        <div class="form-group">
                            <div> <label for="fav_icon">Logo</label></div>
                            <img src="{{asset('uploads/images/setting/logo/'.$data['row']->logo)}}" height="200px" width="200px" alt="fav_icon">
                            <input type="file" class="form-control"   name="image_file" id="image_file" value="{{old('image_file')}}" >
                            @error('image_file')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- logo end--}}

                        {{-- fav_icon start--}}
                        <div class="form-group">
                            <div> <label for="fav_icon">Fav Icon</label></div>
                            <img src="{{asset('uploads/images/setting/fav_icon/'.$data['row']->fav_icon)}}" height="200px" width="200px" alt="fav_icon">

                            <input type="file" class="form-control"   name="image_files" id="image_files" value="{{old('images_file')}}" >
                            @error('image_file')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- fav_icon end--}}

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
