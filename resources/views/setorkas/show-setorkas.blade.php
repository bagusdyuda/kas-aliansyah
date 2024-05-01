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
                                <h3>Baca Data</h3>
                                <div class="card-body">
                                    <label class="control-label">Unit</label>
                                        <div>
                                            <select class="form-select" name="unit" aria-label="Default select example" disabled>
                                                <option value="MAD SHOLIKIN" @if ($setorankas->unit == "MAD SHOLIKIN") selected @endif>MAD SHOLIKIN</option>
                                                <option value="EDI PURNOMO" @if ($setorankas->unit == "EDI PURNOMO") selected @endif>EDI PURNOMO</option>
                                                <option value="ENDIK" @if ($setorankas->unit == "ENDIK") selected @endif>ENDIK</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Tanggal Setoran</label>
                                            <input type="text" name="tanggal_setoran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->tanggal_setoran }}" readonly>
                                        </div>
                                        <label class="control-label">Penerima</label>
                                        <div>
                                            <select class="form-select" name="penerima" aria-label="Default select example" disabled>
                                                <option value="ATOK NOVIANTO" @if ($setorankas->penerima == "ATOK NOVIANTO") selected @endif>ATOK NOVIANTO</option>
                                            </select>
                                        </div>
                                        <br>
                                        <label class="control-label">Keperluan</label>
                                        <div>
                                            <select class="form-select" name="keperluan" aria-label="Default select example" disabled>
                                                <option value="SWTORAN KAS TUNAI" @if ($setorankas->keperluan == "SETORAN KAS TUNAI") selected @endif>SETORAN KAS TUNAI</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Nominal</label>
                                            <input type="number" name="nominal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->nominal }}" readonly>
                                        </div>
                                    <div class="form-group d-flex justify-content-end">
                                        <a href="/data-setorkas" class="btn btn-primary">Kembali</a>
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
