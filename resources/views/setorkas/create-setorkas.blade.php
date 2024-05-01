@extends('layouts.app')

@section('content')
  <style>
    #custom{
      visibility:hidden;
      display: block;
    }
  </style>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Setoran Kas') }}</h1>
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
                                    <form action="{{ route('simpan-setorkas') }}" method="POST">
                                        @csrf
                                        <label class="control-label">Unit</label>
                                        <div>
                                            <select class="form-select" name="unit" aria-label="Default select example">
                                                <option value=""> </option>
                                                <option value="MAD SHOLIKIN">MAD SHOLIKIN</option>
                                                <option value="EDI PURNOMO">EDI PURNOMO</option>
                                                <option value="ENDIK">ENDIK</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Tanggal Setoran</label>
                                            <input type="text" name="tanggal_setoran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <label class="control-label">Penerima</label>
                                        <div>
                                            <select class="form-select" name="penerima" aria-label="Default select example">
                                                <option value=""> </option>
                                                <option value="ATOK NOVIANTO">ATOK NOVIANTO</option>
                                            </select>
                                        </div>
                                        <br>
                                        <label class="control-label">Keperluan</label>
                                        <div>
                                            <select class="form-select" name="keperluan" aria-label="Default select example">
                                                <option value=""> </option>
                                                <option value="SETORAN KAS TUNAI">SETORAN KAS TUNAI</option>
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
