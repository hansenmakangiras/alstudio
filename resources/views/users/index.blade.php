@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <h1>
        Pengguna
        <small>Tampil Pengguna</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Pengguna</li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    {{--<h3 class="box-title">Semua Pengguna</h3>--}}
                    <a class="btn btn-sm btn-flat btn-openid" href="{{ route('pengguna.create') }}"><i
                            class="fa fa-user-circle-o"></i> Tambah Pengguna</a>
                    {{--<div class="box-tools">--}}
                    {{--<a class="btn btn-sm btn-flat btn-primary" href="{{ route('pengguna.create') }}">Tambah</a>--}}
                    {{--</div>--}}
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Level Akses</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $val)
                            <tr>
                                <td>{{ $val->id }}</td>
                                <td>{{ $val->name }}</td>
                                <td>{{ $val->email }}</td>
                                <td>{{ $val->level->level }}</td>
                                <td>{{ $val->created_at }}</td>
                                <td>
                                    <a href="{{ route('pengguna.update', $val->id) }}" class="btn btn-xs btn-primary
                                    btn-flat"><i class="fa fa-edit"></i> Ubah</a>
                                    <a href="{{ route('pengguna.destroy', $val->id) }}" class="btn btn-xs btn-danger
                                    btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(function () {

            $('#example1').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endpush
