@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <h1>
        Pengguna
        <small>Tambah Pengguna</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ route('pengguna.index') }}"><i class="fa fa-user"></i> Pengguna</a></li>
        <li class="active">Create</li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('Success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Pesan Berhasil!</h4>
                    {{ session('Success') }}
                </div>
            @elseif (session('Error'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Terjadi Kesalahan!</h4>
                    {{ session('Error') }}
                </div>
            @endif
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Pengguna</h3>
                    {{--<div class="box-tools">--}}
                    {{--<a class="btn btn-sm btn-flat btn-primary" href="">Tambah</a>--}}
                    {{--<a class="btn btn-sm btn-flat btn-danger" href="">Lihat Data</a>--}}
                    {{--</div>--}}
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('pengguna.store') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Nama Lengkap</label>

                            <div class="col-sm-8">
                                {!! Form::text('name', null, ['class' => 'form-control','id'=>'name','placeholder'
                                => 'Masukkan nama lengkap anda']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-8">
                                {!! Form::email('email', null, ['class' => 'form-control','id'=>'email',
                                'placeholder'=>'Masukkan email anda'])
                                 !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Kata Sandi</label>

                            <div class="col-sm-8">
                                {!! Form::password('password',['class' => 'form-control','id'=>'password',
                                'placeholder'=>'Masukkan kata kunci anda'])
                                 !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirmpassword" class="col-sm-2 control-label">Ulang Kata Sandi</label>

                            <div class="col-sm-8">
                                {!! Form::password('confirmpassword', ['class' => 'form-control',
                                'id'=>'confirmpassword',
                                'placeholder'=>'Ulangi kata kunci anda'])
                                 !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirmpassword" class="col-sm-2 control-label">Level Akses</label>

                            <div class="col-sm-8">
                                {!! Form::select('level', $level , null , ['class' => 'form-control','id'=>'level']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('is_admin', '1', null,  ['id' => 'level','type'=>'checkbox'])
                                         !!}
                                        Is Admin
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('pengguna.index') }}" type="submit" class="btn btn-default">Kembali</a>
                        <button type="submit" class="btn btn-info pull-right">Simpan</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(function () {

        })
    </script>
@endpush
