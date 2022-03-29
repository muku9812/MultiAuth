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
                        <h1>Add Setting</h1>
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

                    <form action="{{route('setting.store')}}" enctype="multipart/form-data" method='POST'>
                        @csrf
                        {{--                       {{-- name start--}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="Enter name for Setting " name="name" id="name" value="{{old('name')}}" >
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- title end--}}

                        {{-- address start--}}
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" placeholder="Enter address for setting " name="address" id="address" value="{{old('address')}}" >
                            @error('address')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- address end--}}

                        {{-- pam_vat start--}}
                        <div class="form-group">
                            <label for="pam_vat">Pam VAT</label>
                            <input type="text" class="form-control" placeholder="Enter pam_vat for setting " name="pam_vat" id="pam_vat" value="{{old('pam_vat')}}" >
                            @error('pam_vat')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- pam_vat end--}}

                        {{-- reg_no start--}}
                        <div class="form-group">
                            <label for="reg_no">Reg No</label>
                            <input type="text" class="form-control" placeholder="Enter reg no for setting " name="reg_no" id="reg_no" value="{{old('reg_no')}}" >
                            @error('reg_no')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- reg_no end--}}

                        {{-- facebook start--}}
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" class="form-control" placeholder="Enter facebook for setting " name="facebook" id="facebook" value="{{old('facebook')}}" >
                            @error('facebook')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- facebook end--}}

                        {{-- youtube start--}}
                        <div class="form-group">
                            <label for="youtube">Youtube</label>
                            <input type="text" class="form-control" placeholder="Enter youtube for setting " name="youtube" id="youtube" value="{{old('youtube')}}" >
                            @error('youtube')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- youtube end--}}

                        {{-- twitter start--}}
                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" class="form-control" placeholder="Enter twitter for setting " name="twitter" id="twitter" value="{{old('twitter')}}" >
                            @error('twitter')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- twitter end--}}

                        {{-- gmail start--}}
                        <div class="form-group">
                            <label for="gmail">G-mail</label>
                            <input type="text" class="form-control" placeholder="Enter gmail for setting " name="gmail" id="gmail" value="{{old('gmail')}}" >
                            @error('gmail')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- gmail end--}}

                        {{-- skype start--}}
                        <div class="form-group">
                            <label for="skype">Skype</label>
                            <input type="text" class="form-control" placeholder="Enter skype for setting " name="skype" id="skype" value="{{old('skype')}}" >
                            @error('skype')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- skype end--}}

                        {{-- phone start--}}
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" placeholder="Enter phone for setting " name="phone" id="phone" value="{{old('phone')}}" >
                            @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- phone end--}}

                        {{-- logo start--}}
                        <div class="form-group">
                            <label for="image_file">Logo</label>
                            <input type="file" class="form-control"   name="image_file" id="image_file" value="{{old('image_file')}}" >
                            @error('image_file')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- logo end--}}

                        {{-- fav_icon start--}}
                        <div class="form-group">
                            <label for="fav_icon">Logo</label>
                            <input type="file" class="form-control"   name="image_files" id="image_files" value="{{old('images_file')}}" >
                            @error('image_file')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- fav_icon end--}}


                        {{-- created_by start--}}
                        <div class="form-group">
                            <input type="number" class="form-control" name="created_by" id="created_by" value="{{auth()->user()->id}}" hidden >
                        </div>
                        {{-- created_by end--}}

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
