<?php

namespace App\Http\Controllers;

use App\Models\Debitmasuk;
use Illuminate\Http\Request;

class DebitmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $debitmasuk = Debitmasuk::all();
      return view('debitmasuk.data-debitmasuk',compact('debitmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('debitmasuk.create-debitmasuk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $debitmasuk = new Debitmasuk();
        $debitmasuk->unit = $request->unit;
        $debitmasuk->tanggal_mutasi_bank = $request->tanggal_mutasi_bank;
        $debitmasuk->nota = $request->nota;
        $debitmasuk->letak_kas_bank = $request->letak_kas_bank;
        $debitmasuk->atas_nama_pengirim = $request->atas_nama_pengirim;
        $debitmasuk->keperluan = $request->keperluan;
        $debitmasuk->keterangan = $request->keterangan;
        $debitmasuk->nominal = $request->nominal;
        $debitmasuk->save();

        return redirect()->route('data-debitmasuk')->with('toast_success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $debitmasuk = Debitmasuk::find($id);
        return view('debitmasuk.show-debitmasuk', compact('debitmasuk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $debitmasuk = Debitmasuk::find($id);
        return view('debitmasuk.edit-debitmasuk', compact('debitmasuk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $debitmasuk = Debitmasuk::find($id);
        $debitmasuk->unit = $request->unit;
        $debitmasuk->tanggal_mutasi_bank = $request->tanggal_mutasi_bank;
        $debitmasuk->nota = $request->nota;
        $debitmasuk->letak_kas_bank = $request->letak_kas_bank;
        $debitmasuk->atas_nama_pengirim = $request->atas_nama_pengirim;
        $debitmasuk->keperluan = $request->keperluan;
        $debitmasuk->keterangan = $request->keterangan;
        $debitmasuk->nominal = $request->nominal;
        $debitmasuk->save();

        return redirect()->route('data-debitmasuk')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $debitmasuk = Debitmasuk::find($id);
        $debitmasuk->delete();

        return redirect('data-debitmasuk')->with('info', 'Data Berhasil Dihapus');
    }
}
