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
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Unit</label>
                                        <input type="text" name="unit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->unit }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal Setoran</label>
                                        <input type="text" name="tgl_setoran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->tgl_setoran }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Nota</label>
                                        <input type="text" name="nota" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->nota }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Letak Setoran</label>
                                        <input type="text" name="letak_setoran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->letak_setoran }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Pengirim</label>
                                        <input type="text" name="pengirim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->pengirim }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Keperluan</label>
                                        <input type="text" name="keperluan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->keperluan }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $setorankas->keterangan }}" readonly>
                                    </div>
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
