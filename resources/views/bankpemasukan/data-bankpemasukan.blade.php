@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Bank Pemasukan') }}</h1>
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
                                    <a href="{{ route('create-bankpemasukan') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered data-table">
                                <tr>
                                    <th>#</th>
                                    <th>Unit</th>
                                    <th>Tanggal Mutasi Bank</th>
                                    <th>No. Ref</th>
                                    <th>Letak Kas Bank</th>
                                    <th>Atas Nama Pengirim</th>
                                    <th>Keperluan</th>
                                    <th>Nominal</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($bankpemasukan as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->unit }}</td>
                                    <td>{{ $item->tanggal_mutasi_bank }}</td>
                                    <td>{{ $item->no_ref }}</td>
                                    <td>{{ $item->letak_kas_bank }}</td>
                                    <td>{{ $item->atas_nama_pengirim }}</td>
                                    <td>{{ $item->keperluan }}</td>
                                    <td>{{ $item->nominal }}</td>
                                    <td>
                                        <a href="{{ url('edit-bankpemasukan',$item->id) }}"><i class="fas fa-edit" style="color:blue"></i></a> |
                                        <a href="{{ url('show-bankpemasukan',$item->id) }}"><i class="fas fa-solid fa-eye" style="color:green"></i></a> |
                                        <a href="{{ url('delete-bankpemasukan',$item->id) }}"onclick="return confirm('Hapus Data?')"><i class="fas fa-trash-alt" style="color:red"></i></a>
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

