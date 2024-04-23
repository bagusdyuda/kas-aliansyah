@extends('layouts.app')

@section('content')
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
                                <h3>Edit Data</h3>
                                <div class="card-body">
                                    <form action="{{ url('update-setorkas',$setorankas->id) }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Unit</label>
                                            <input type="text" name="unit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->unit }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Tanggal Setoran</label>
                                            <input type="text" name="tgl_setoran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->tgl_setoran }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Nota</label>
                                            <input type="text" name="nota" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->nota }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Letak Setoran</label>
                                            <input type="text" name="letak_setoran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->letak_setoran }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Pengirim</label>
                                            <input type="text" name="pengirim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->pengirim }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Keperluan</label>
                                            <input type="text" name="keperluan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->keperluan }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                                            <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->keterangan }}">
                                        </div>
                                        <label class="control-label">Jenis Pembayaran</label>
                                        <div>
                                            <select class="form-select" name="kategori" aria-label="Default select example">
                                                <option value="Tunai" @if ($setorankas->kategori == "Tunai") selected @endif>Tunai</option>
                                                <option value="Bank" @if ($setorankas->kategori == "Bank") selected @endif>Bank</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Nominal</label>
                                            <input type="number" name="nominal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->nominal }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Rekening Bank</label>
                                            <input type="text" name="rek_bank" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->rek_bank }}">
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
