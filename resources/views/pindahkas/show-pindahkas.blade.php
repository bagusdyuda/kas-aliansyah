@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Pindah Kas') }}</h1>
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
                                        <input type="text" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $pindahkas->tanggal }}" readonly>
                                    </div>
                                    <label class="control-label">Yang Menyerahkan</label>
                                    <div>
                                        <select class="custom-select form-control-border" name="yang_menyerahkan" aria-label="Default select example" disabled>
                                            <option value="ATOK NOVIANTO" @if ($pindahkas->yang_menyerahkan == "ATOK NOVIANTO") selected @endif>ATOK NOVIANTO</option>
                                        </select>
                                    </div>
                                    <br>
                                    <label class="control-label">Yang Menerima</label>
                                    <div>
                                        <select class="custom-select form-control-border" name="yang_menerima" aria-label="Default select example" disabled>
                                            <option value="MOHAMMAD UMAM" @if ($pindahkas->yang_menerima == "MOHAMMAD UMAM") selected @endif>MOHAMMAD UMAM</option>
                                        </select>
                                    </div>
                                    <br>
                                    <label class="control-label">Pindah Dari Kas</label>
                                    <div>
                                        <select class="custom-select form-control-border" name="pindah_dari_kas" aria-label="Default select example" disabled>
                                            <option value="KAS KASIR SALES" @if ($pindahkas->pindah_dari_kas == "KAS KASIR SALES") selected @endif>KAS KASIR SALES</option>
                                        </select>
                                    </div>
                                    <br>
                                    <label class="control-label">Pindah Ke Kas</label>
                                    <div>
                                        <select class="custom-select form-control-border" name="pindah_ke_kas" aria-label="Default select example" disabled>
                                            <option value="KAS BRANKAS" @if ($pindahkas->pindah_dari_kas == "KAS BRANKAS") selected @endif>KAS BRANKAS</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Nominal</label>
                                        <input type="number" name="nominal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $pindahkas->nominal }}" readonly>
                                    </div>
                                    <div class="form-group d-flex justify-content-end">
                                        <a href="/data-pindahkas" class="btn btn-primary">Kembali</a>
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
