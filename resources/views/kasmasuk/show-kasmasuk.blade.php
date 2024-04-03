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
                                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                        <input type="text" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $kasmasuk->tanggal }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Nota</label>
                                        <input type="text" name="nota" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $kasmasuk->nota }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Penyerah</label>
                                        <input type="text" name="penyerah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $kasmasuk->penyerah }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Id User</label>
                                        <input type="number" name="id_user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $kasmasuk->id_user }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Dari Kas</label>
                                        <input type="text" name="dari_kas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $kasmasuk->dari_kas }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Plot</label>
                                        <input type="text" name="plot" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $kasmasuk->plot }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Nominal</label>
                                        <input type="number" name="nominal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $kasmasuk->nominal }}" readonly>
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
