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
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3"
                                       placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group has-error">
                            <label class="col-sm-2 control-label" for="inputError"><i class="fa
                            fa-times-circle-o"></i>
                                Input with
                                error</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                                <span class="help-block">Help block with error</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Sign in</button>
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
