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
                    <h1 class="m-0">{{ __('Setoran Pindah Transfer Sales') }}</h1>
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
                                    <form action="{{ route('simpan-setoranpindahtransfersales') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Tanggal Transfer</label>
                                            <input type="text" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Sales</label>
                                            <input type="number" name="sales" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">No. Ref</label>
                                            <input type="text" name="no_ref" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <label class="control-label">Bank</label>
                                        <div>
                                            <select class="form-select" name="bank" aria-label="Default select example">
                                                <option value=""> </option>
                                                <option value="KAS BANK BRI - ALIANSYAH 0066.01.001585.302">KAS BANK BRI - ALIANSYAH 0066.01.001585.302</option>
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
