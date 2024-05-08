@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Pindah Kas Bank') }}</h1>
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
                                    <form action="{{ url('update-pindahkasbank',$pindahkasbank->id) }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                            <input type="text" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $pindahkasbank->tanggal }}">
                                        </div>
                                        <label class="control-label">Kas Bank</label>
                                        <div>
                                            <select class="custom-select form-control-border" name="kas_bank" aria-label="Default select example">
                                                <option value="KAS BANK BRI - ALIANSYAH 0066.01.001585.302" @if ($pindahkasbank->kas_bank == "KAS BANK BRI - ALIANSYAH 0066.01.001585.302") selected @endif>KAS BANK BRI - ALIANSYAH 0066.01.001585.302</option>
                                                <option value="KAS BANK BCA - ALIANSYAH 981753703" @if ($pindahkasbank->kas_bank == "KAS BANK BCA - ALIANSYAH 981753703") selected @endif>KAS BANK BCA - ALIANSYAH 981753703</option>
                                                <option value="KAS BANK MANDIRI - ALIANSYAH 135.00.15359.522" @if ($pindahkasbank->kas_bank == "KAS BANK MANDIRI - ALIANSYAH 135.00.15359.522") selected @endif>KAS BANK MANDIRI - ALIANSYAH 135.00.15359.522</option>
                                                <option value="KAS BANK BRI - TRI HANDOKO 5959.01.029630.53.5" @if ($pindahkasbank->kas_bank == "KAS BANK BRI - TRI HANDOKO 5959.01.029630.53.5") selected @endif>KAS BANK BRI - TRI HANDOKO 5959.01.029630.53.5</option>
                                            </select>
                                        </div>
                                        <br>
                                        <label class="control-label">Pindah Ke</label>
                                        <div>
                                            <select class="custom-select form-control-border" name="pindah_ke" aria-label="Default select example">
                                                <option value="KAS BRANKAS" @if ($pindahkasbank->pindah_ke == "KAS BRANKAS") selected @endif>KAS BRANKAS</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                                            <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $pindahkasbank->keterangan }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Nominal</label>
                                            <input type="number" name="nominal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $pindahkasbank->nominal }}">
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
