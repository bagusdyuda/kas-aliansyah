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
                                <h3>Edit Data</h3>
                                <div class="card-body">
                                    <form action="{{ url('update-bankpemasukan',$bankpemasukan->id) }}" method="POST">
                                        @csrf
                                        <label class="control-label">Unit</label>
                                        <div>
                                            <select class="custom-select form-control-border" name="unit" aria-label="Default select example">
                                                <option value="MAD SHOLIKIN" @if ($bankpemasukan->unit == "MAD SHOLIKIN") selected @endif>MAD SHOLIKIN</option>
                                                <option value="EDI PURNOMO" @if ($bankpemasukan->unit == "EDI PURNOMO") selected @endif>EDI PURNOMO</option>
                                                <option value="ENDIK" @if ($bankpemasukan->unit == "ENDIK") selected @endif>ENDIK</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Tanggal Mutasi Bank</label>
                                            <input type="text" name="tanggal_mutasi_bank" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $bankpemasukan->tanggal_mutasi_bank }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">No. Ref</label>
                                            <input type="text" name="no_ref" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $bankpemasukan->no_ref }}">
                                        </div>
                                        <label class="control-label">Letak Kas Bank</label>
                                        <div>
                                            <select class="custom-select form-control-border" name="letak_kas_bank" aria-label="Default select example">
                                                <option value="KAS BANK BRI - ALIANSYAH 0066.01.001585.302" @if ($bankpemasukan->letak_kas_bank == "KAS BANK BRI - ALIANSYAH 0066.01.001585.302") selected @endif>KAS BANK BRI - ALIANSYAH 0066.01.001585.302</option>
                                                <option value="KAS BANK BCA - ALIANSYAH 981753703" @if ($bankpemasukan->letak_kas_bank == "KAS BANK BCA - ALIANSYAH 981753703") selected @endif>KAS BANK BCA - ALIANSYAH 981753703</option>
                                                <option value="KAS BANK MANDIRI - ALIANSYAH 135.00.15359.522" @if ($bankpemasukan->letak_kas_bank == "KAS BANK MANDIRI - ALIANSYAH 135.00.15359.522") selected @endif>KAS BANK MANDIRI - ALIANSYAH 135.00.15359.522</option>
                                                <option value="KAS BANK BRI - TRI HANDOKO 5959.01.029630.53.5" @if ($bankpemasukan->letak_kas_bank == "KAS BANK BRI - TRI HANDOKO 5959.01.029630.53.5") selected @endif>KAS BANK BRI - TRI HANDOKO 5959.01.029630.53.5</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Atas Nama Pengirim</label>
                                            <input type="text" name="atas_nama_pengirim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $bankpemasukan->atas_nama_pengirim }}">
                                        </div>
                                        <label class="control-label">Keperluan</label>
                                        <div>
                                            <select class="custom-select form-control-border" name="keperluan" aria-label="Default select example">
                                                <option value="SETORAN SALES PINDAH TRANSFER" @if ($bankpemasukan->keperluan == "SETORAN SALES PINDAH TRANSFER") selected @endif>SETORAN SALES PINDAH TRANSFER</option>
                                                <option value="PELUNASAN PIUTANG" @if ($bankpemasukan->keperluan == "PELUNASAN PIUTANG") selected @endif>PELUNASAN PIUTANG</option>
                                                <option value="BIAYA ADMIN BANK" @if ($bankpemasukan->keperluan == "BIAYA ADMIN BANK") selected @endif>BIAYA ADMIN BANK</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Nominal</label>
                                            <input type="number" name="nominal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $bankpemasukan->nominal }}">
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
