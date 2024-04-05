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
                                <h3>Baca Data</h3>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Unit</label>
                                        <input type="text" name="unit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $debitmasuk->unit }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal Mutasi Bank</label>
                                        <input type="text" name="tanggal_mutasi_bank" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $debitmasuk->tanggal_mutasi_bank }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Nota</label>
                                        <input type="text" name="nota" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $debitmasuk->nota }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Letak Kas Bank</label>
                                        <input type="text" name="letak_kas_bank" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $debitmasuk->letak_kas_bank }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Atas Nama Pengirim</label>
                                        <input type="text" name="atas_nama_pengirim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $debitmasuk->atas_nama_pengirim }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Keperluan</label>
                                        <input type="text" name="keperluan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $debitmasuk->keperluan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $debitmasuk->keterangan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Nominal</label>
                                        <input type="number" name="nominal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $debitmasuk->nominal }}">
                                    </div>
                                    <div class="form-group d-flex justify-content-end">
                                        <a href="/data-kasmasuk " class="btn btn-primary">Kembali</a>
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
