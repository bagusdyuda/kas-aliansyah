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
                                        <label class="control-label">Unit</label>
                                        <div>
                                            <select class="custom-select form-control-border" name="unit" aria-label="Default select example">
                                                <option value="MAD SHOLIKIN" @if ($setorankas->unit == "MAD SHOLIKIN") selected @endif>MAD SHOLIKIN</option>
                                                <option value="EDI PURNOMO" @if ($setorankas->unit == "EDI PURNOMO") selected @endif>EDI PURNOMO</option>
                                                <option value="ENDIK" @if ($setorankas->unit == "ENDIK") selected @endif>ENDIK</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Tanggal Setoran</label>
                                            <input type="text" name="tanggal_setoran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->tanggal_setoran }}">
                                        </div>
                                        <label class="control-label">Penerima</label>
                                        <div>
                                            <select class="custom-select form-control-border" name="penerima" aria-label="Default select example">
                                                <option value="ATOK NOVIANTO" @if ($setorankas->penerima == "ATOK NOVIANTO") selected @endif>ATOK NOVIANTO</option>
                                            </select>
                                        </div>
                                        <br>
                                        <label class="control-label">Keperluan</label>
                                        <div>
                                            <select class="custom-select form-control-border" name="keperluan" aria-label="Default select example">
                                                <option value="SETORAN KAS TUNAI" @if ($setorankas->keperluan == "SETORAN KAS TUNAI") selected @endif>SETORAN KAS TUNAI</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Nominal</label>
                                            <input type="number" name="nominal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->nominal }}">
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
