<?php

namespace App\Http\Controllers;

use App\Models\Setorankas;
use Illuminate\Http\Request;

class SetorankasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $setorankas = Setorankas::all();
      return view('setorkas.data-setorkas',compact('setorankas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('setorkas.create-setorkas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $setorankas = new Setorankas();
        $setorankas->unit = $request->unit;
        $setorankas->tgl_setoran = $request->tgl_setoran;
        $setorankas->nota = $request->nota;
        $setorankas->letak_setoran = $request->letak_setoran;
        $setorankas->pengirim = $request->pengirim;
        $setorankas->keperluan = $request->keperluan;
        $setorankas->keterangan = $request->keterangan;
        $setorankas->nominal = $request->nominal;
        $setorankas->save();

        return redirect()->route('data-setorkas')->with('toast_success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $setorankas = Setorankas::find($id);
        return view('setorkas.show-setorkas', compact('setorankas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $setorankas = Setorankas::find($id);
        return view('setorkas.edit-setorkas', compact('setorankas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $setorankas = Setorankas::find($id);
        $setorankas->unit = $request->unit;
        $setorankas->tgl_setoran = $request->tgl_setoran;
        $setorankas->nota = $request->nota;
        $setorankas->letak_setoran = $request->letak_setoran;
        $setorankas->pengirim = $request->pengirim;
        $setorankas->keperluan = $request->keperluan;
        $setorankas->keterangan = $request->keterangan;
        $setorankas->nominal = $request->nominal;
        $setorankas->save();

        return redirect()->route('data-setorkas')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $setorankas = Setorankas::find($id);
        $setorankas->delete();

        return redirect('data-setorkas')->with('info', 'Data Berhasil Dihapus');
    }
}
