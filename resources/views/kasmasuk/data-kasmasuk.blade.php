@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Kas Masuk') }}</h1>
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
                                    <a href="{{ route('create-kasmasuk') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus=square"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal</th>
                                    <th>Nota</th>
                                    <th>Penyerah</th>
                                    <th>Id User</th>
                                    <th>Dari Kas</th>
                                    <th>Plot</th>
                                    <th>Nominal</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($kasmasuk as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>{{ $item->nota }}</td>
                                    <td>{{ $item->penyerah }}</td>
                                    <td>{{ $item->id_user }}</td>
                                    <td>{{ $item->dari_kas }}</td>
                                    <td>{{ $item->plot }}</td>
                                    <td>{{ $item->nominal }}</td>
                                    <td>
                                        <a href="{{ url('edit-kasmasuk',$item->id) }}"><i class="fas fa-edit"></i></a> |
                                         <a href="{{ url('delete-kasmasuk',$item->id) }}"onclick="return confirm('Hapus Data?')"><i class="fas fa-trash-alt" style="color:red"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="card-footer">
                            {{ $kasmasuk->links() }}
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
