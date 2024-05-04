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
                    <h1 class="m-0">{{ __('Pindah Kas') }}</h1>
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
                                    <form action="{{ route('simpan-pindahkas') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                            <input type="text" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <label class="control-label">Yang Menyerahkan</label>
                                        <div>
                                            <select class="custom-select form-control-border" name="yang_menyerahkan" aria-label="Default select example">
                                                <option value="">Pilih Penyerah</option>
                                                <option value="ATOK NOVIANTO">ATOK NOVIANTO</option>
                                            </select>
                                        </div>
                                        <br>
                                        <label class="control-label">Yang Menerima</label>
                                        <div>
                                            <select class="custom-select form-control-border" name="yang_menerima" aria-label="Default select example">
                                                <option value="">Pilih Penerima</option>
                                                <option value="MOHAMMAD UMAM">MOHAMMAD UMAM</option>
                                            </select>
                                        </div>
                                        <br>
                                        <label class="control-label">Pindah Dari Kas</label>
                                        <div>
                                            <select class="custom-select form-control-border" name="pindah_dari_kas" aria-label="Default select example">
                                                <option value="">Pilih Kas</option>
                                                <option value="KAS KASIR SALES">KAS KASIR SALES</option>
                                            </select>
                                        </div>
                                        <br>
                                        <label class="control-label">Pindah Ke Kas</label>
                                        <div>
                                            <select class="custom-select form-control-border" name="pindah_ke_kas" aria-label="Default select example">
                                                <option value="">Pilih Kas</option>
                                                <option value="KAS BRANKAS">KAS BRANKAS</option>
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
