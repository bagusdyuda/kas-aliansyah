@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Kas Kantor') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <div class="card-tools">
                                    <a href="{{ route('create-kaskantor') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered data-table">
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Nota</th>
                                    <th>Letak Setoran</th>
                                    <th>Plot</th>
                                    <th>Pengirim</th>
                                    <th>Penerima</th>
                                    <th>Keperluan</th>
                                    <th>Keterangan</th>
                                    <th>Nominal</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($kaskantor as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->tanggal_masuk }}</td>
                                    <td>{{ $item->nota }}</td>
                                    <td>{{ $item->letak_setoran }}</td>
                                    <td>{{ $item->plot }}</td>
                                    <td>{{ $item->pengirim }}</td>
                                    <td>{{ $item->penerima }}</td>
                                    <td>{{ $item->keperluan }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>{{ $item->nominal }}</td>
                                    <td>
                                        <a href="{{ url('edit-kaskantor',$item->id) }}"><i class="fas fa-edit" style="color:blue"></i></a> |
                                        <a href="{{ url('show-kaskantor',$item->id) }}"><i class="fas fa-solid fa-eye" style="color:green"></i></a> |
                                         <a href="{{ url('delete-kaskantor',$item->id) }}"onclick="return confirm('Hapus Data?')"><i class="fas fa-trash-alt" style="color:red"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

