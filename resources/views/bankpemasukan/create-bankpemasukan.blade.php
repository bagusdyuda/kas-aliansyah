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
                                <h3>Tambah Data</h3>
                                <div class="card-body">
                                    <form action="{{ route('simpan-bankpemasukan') }}" method="POST">
                                        @csrf
                                        <label class="control-label">Unit</label>
                                        <div>
                                            <select class="custom-select form-control-border" name="unit" aria-label="Default select example">
                                                <option value="">Pilih Unit</option>
                                                <option value="MAD SHOLIKIN">MAD SHOLIKIN</option>
                                                <option value="EDI PURNOMO">EDI PURNOMO</option>
                                                <option value="ENDIK">ENDIK</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Tanggal Mutasi Bank</label>
                                            <input type="text" name="tanggal_mutasi_bank" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">No. Ref</label>
                                            <input type="text" name="no_ref" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <label class="control-label">Letak Kas Bank</label>
                                        <div>
                                            <select class="custom-select form-control-border" name="letak_kas_bank" aria-label="Default select example">
                                                <option value="">Pilih Kas Bank</option>
                                                <option value="KAS BANK BRI - ALIANSYAH 0066.01.001585.302">KAS BANK BRI - ALIANSYAH 0066.01.001585.302</option>
                                                <option value="KAS BANK BCA - ALIANSYAH 981753703">KAS BANK BCA - ALIANSYAH 981753703</option>
                                                <option value="KAS BANK MANDIRI - ALIANSYAH 135.00.15359.522">KAS BANK MANDIRI - ALIANSYAH 135.00.15359.522</option>
                                                <option value="KAS BANK BRI - TRI HANDOKO 5959.01.029630.53.5">KAS BANK BRI - TRI HANDOKO 5959.01.029630.53.5</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Atas Nama Pengirim</label>
                                            <input type="text" name="atas_nama_pengirim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <label class="control-label">Keperluan</label>
                                        <div>
                                            <select class="custom-select form-control-border" name="keperluan" aria-label="Default select example">
                                                <option value="">Pilih Keperluan</option>
                                                <option value="SETORAN SALES PINDAH TRANSFER">SETORAN SALES PINDAH TRANSFER</option>
                                                <option value="PELUNASAN PIUTANG">PELUNASAN PIUTANG</option>
                                                <option value="BIAYA ADMIN BANK">BIAYA ADMIN BANK</option>
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
