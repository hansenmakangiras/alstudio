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
                <div class="box-header">
                    <h3 class="box-title">Semua Pengguna</h3>
                    <div class="box-tools">
                        <a class="btn btn-sm btn-flat btn-primary" href="">Tambah</a>
                        <a class="btn btn-sm btn-flat btn-danger" href="">Lihat Data</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
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
                                <td>{{ $val->created_at }}</td>
                                <td>
                                    <a href="" class="btn btn-xs btn-info"><i class="fa fa-edit"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        {{--<tr>--}}
                        {{--<th>Rendering engine</th>--}}
                        {{--<th>Browser</th>--}}
                        {{--<th>Platform(s)</th>--}}
                        {{--<th>Engine version</th>--}}
                        {{--<th>CSS grade</th>--}}
                        {{--</tr>--}}
                        </tfoot>
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
            $('#example').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endpush
