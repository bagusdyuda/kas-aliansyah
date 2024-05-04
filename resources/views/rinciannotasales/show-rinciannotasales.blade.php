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
                                <h3>Baca Data</h3>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">ID Unit</label>
                                        <input type="number" name="id_unit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $rinciannotasales->id_unit }}" readonly>
                                    </div>
                                    <label class="control-label">Nama Unit</label>
                                    <div>
                                        <select class="custom-select form-control-border" name="nama_unit" aria-label="Default select example" disabled>
                                            <option value="MAD SHOLIKIN" @if ($rinciannotasales->nama_unit == "MAD SHOLIKIN") selected @endif>MAD SHOLIKIN</option>
                                            <option value="EDI PURNOMO" @if ($rinciannotasales->nama_unit == "EDI PURNOMO") selected @endif>EDI PURNOMO</option>
                                            <option value="ENDIK" @if ($rinciannotasales->nama_unit == "ENDIK") selected @endif>ENDIK</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal Setor</label>
                                        <input type="text" name="tanggal_setor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $rinciannotasales->tanggal_setor }}" readonly>
                                    </div>
                                    <label class="control-label">Nama Customer</label>
                                    <div>
                                        <select class="custom-select form-control-border" name="nama_customer" aria-label="Default select example" disabled>
                                            <option value="HUDA BOLO TANI MALO BOJONEGORO" @if ($rinciannotasales->nama_customer == "HUDA BOLO TANI MALO BOJONEGORO") selected @endif>HUDA BOLO TANI MALO BOJONEGORO</option>
                                            <option value="DARMAJI AJI JAYA GROBOGAN" @if ($rinciannotasales->nama_customer == "DARMAJI AJI JAYA GROBOGAN") selected @endif>DARMAJI AJI JAYA GROBOGAN</option>
                                            <option value="ADIB KURNIA TANI DEMAK" @if ($rinciannotasales->nama_customer == "ADIB KURNIA TANI DEMAK") selected @endif>ADIB KURNIA TANI DEMAK</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Nominal</label>
                                        <input type="number" name="nominal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $rinciannotasales->nominal }}" readonly>
                                    </div>
                                    <div class="form-group d-flex justify-content-end">
                                        <a href="/data-rinciannotasales" class="btn btn-primary">Kembali</a>
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
