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
                                <h3>Edit Data</h3>
                                <div class="card-body">
                                    <form action="{{ url('update-kasmasuk',$kasmasuk->id) }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                            <input type="text" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $kasmasuk->tanggal }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Nota</label>
                                            <input type="text" name="nota" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $kasmasuk->nota }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Penyerah</label>
                                            <input type="text" name="penyerah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $kasmasuk->penyerah }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Id User</label>
                                            <input type="number" name="id_user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $kasmasuk->id_user }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Dari Kas</label>
                                            <input type="text" name="dari_kas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $kasmasuk->dari_kas }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Plot</label>
                                            <input type="text" name="plot" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $kasmasuk->plot }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Nominal</label>
                                            <input type="number" name="nominal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $kasmasuk->nominal }}">
                                        </div>
                                        <div class="form-group d-flex justify-content-end">
                                            <button type="submit" class="btn btn-success">Ubah Data</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
