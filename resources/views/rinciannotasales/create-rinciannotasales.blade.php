@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Rincian Nota Sales') }}</h1>
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
                                <h3>Tambah Data</h3>
                                <div class="card-body">
                                    <form action="{{ route('simpan-rinciannotasales') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">ID Unit</label>
                                            <input type="number" name="id_unit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <label class="control-label">Nama Unit</label>
                                        <div class="select-container">
                                            <select class="custom-select form-control-border" name="nama_unit">
                                                <option value="">Pilih Unit</option>
                                                <option value="MAD SHOLIKIN">MAD SHOLIKIN</option>
                                                <option value="EDI PURNOMO">EDI PURNOMO</option>
                                                <option value="ENDIK">ENDIK</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Tanggal Setor</label>
                                            <input type="text" name="tanggal_setor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <label class="control-label">Nama Customer</label>
                                        <div>
                                            <select class="custom-select form-control-border" name="nama_customer">
                                                <option value="">Pilih Customer</option>
                                                <option value="HUDA BOLO TANI MALO BOJONEGORO">HUDA BOLO TANI MALO BOJONEGORO</option>
                                                <option value="DARMAJI AJI JAYA GROBOGAN">DARMAJI AJI JAyA GROBOGAN</option>
                                                <option value="ADIB KURNIA TANI DEMAK">ADIB KURNIA TANI DEMAK</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Nominal</label>
                                            <input type="number" name="nominal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group d-flex justify-content-end">
                                            <button type="submit" class="btn btn-success">Simpan Data</button>
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
