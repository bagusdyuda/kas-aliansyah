<?php

namespace App\Http\Controllers;

use App\Models\BankPemasukan;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\RedisJob;

class BankPemasukanController extends Controller
{
    public function index()
    {
        $bankpemasukan = BankPemasukan::all();
        return view('bankpemasukan.data-bankpemasukan', compact('bankpemasukan'));
    }

    public function create()
    {
        return view('bankpemasukan.create-bankpemasukan');
    }

    public function store(Request $request)
    {
        $bankpemasukan = new BankPemasukan();
        $bankpemasukan->unit = $request->unit;
        $bankpemasukan->tanggal_mutasi_bank = $request->tanggal_mutasi_bank;
        $bankpemasukan->no_ref = $request->no_ref;
        $bankpemasukan->letak_kas_bank = $request->letak_kas_bank;
        $bankpemasukan->atas_nama_pengirim = $request->atas_nama_pengirim;
        $bankpemasukan->keperluan = $request->keperluan;
        $bankpemasukan->nominal = $request->nominal;
        $bankpemasukan->save();

        return redirect()->route('data-bankpemasukan');
    }

    public function show(string $id)
    {
        $bankpemasukan = BankPemasukan::find($id);
        return view('bankpemasukan.show-bankpemasukan', compact('bankpemasukan'));
    }

    public function edit(string $id)
    {
        $bankpemasukan = BankPemasukan::find($id);
        return view('bankpemasukan.edit-bankpemasukan', compact('bankpemasukan'));
    }

    public function update(string $id, Request $request)
    {
        $bankpemasukan = BankPemasukan::find($id);
        $bankpemasukan->unit = $request->unit;
        $bankpemasukan->tanggal_mutasi_bank = $request->tanggal_mutasi_bank;
        $bankpemasukan->no_ref = $request->no_ref;
        $bankpemasukan->letak_kas_bank = $request->letak_kas_bank;
        $bankpemasukan->atas_nama_pengirim = $request->atas_nama_pengirim;
        $bankpemasukan->keperluan = $request->keperluan;
        $bankpemasukan->nominal = $request->nominal;
        $bankpemasukan->save();

        return redirect()->route('data-bankpemasukan');
    }

    public function destroy(string $id)
    {
        $bankpemasukan = BankPemasukan::find($id);
        $bankpemasukan->delete();

        return redirect('data-bankpemasukan');
    }
}
