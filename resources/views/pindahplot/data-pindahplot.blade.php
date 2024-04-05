@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Pindah Plot') }}</h1>
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
                                    <a href="{{ route('create-pindahplot') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered data-table">
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal</th>
                                    <th>Nota</th>
                                    <th>Dari Plot</th>
                                    <th>Ke Plot</th>
                                    <th>Letak Kas</th>
                                    <th>Keterangan</th>
                                    <th>Nominal</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($pindahplot as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>{{ $item->nota }}</td>
                                    <td>{{ $item->dari_plot }}</td>
                                    <td>{{ $item->ke_plot }}</td>
                                    <td>{{ $item->letak_kas }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>{{ $item->nominal }}</td>
                                    <td>
                                        <a href="{{ url('edit-pindahplot',$item->id) }}"><i class="fas fa-edit" style="color:blue"></i></a> |
                                        <a href="{{ url('show-pindahplot',$item->id) }}"><i class="fas fa-solid fa-eye" style="color:green"></i></a> |
                                        <a href="{{ url('delete-pindahplot',$item->id) }}"onclick="return confirm('Hapus Data?')"><i class="fas fa-trash-alt" style="color:red"></i></a>
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
    @include('sweetalert::alert')
    <!-- /.content -->
@endsection

