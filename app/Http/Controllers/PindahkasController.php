<?php

namespace App\Http\Controllers;

use App\Models\SalesPindahKas;
use Illuminate\Http\Request;

class PindahkasController extends Controller
{
    public function index()
    {
        $pindahkas = SalesPindahKas::all();
        return view('pindahkas.data-pindahkas', compact('pindahkas'));
    }

    public function create()
    {
        return view('pindahkas.create-pindahkas');
    }

    public function store(Request $request)
    {
        $pindahkas = new SalesPindahKas();
        $pindahkas->tanggal = $request->tanggal;
        $pindahkas->yang_menyerahkan = $request->yang_menyerahkan;
        $pindahkas->yang_menerima = $request->yang_menerima;
        $pindahkas->pindah_dari_kas = $request->pindah_dari_kas;
        $pindahkas->pindah_ke_kas = $request->pindah_ke_kas;
        $pindahkas->nominal = $request->nominal;
        $pindahkas->save();

        return redirect()->route('data-pindahkas');
    }

    public function show(string $id)
    {
        $pindahkas = SalesPindahKas::find($id);
        return view('pindahkas.show-pindahkas', compact('pindahkas'));
    }

    public function edit(string $id)
    {
        $pindahkas = SalesPindahKas::find($id);
        return view('pindahkas.edit-pindahkas', compact('pindahkas'));
    }

    public function update(string $id,Request $request)
    {
        $pindahkas = SalesPindahKas::find($id);
        $pindahkas->tanggal = $request->tanggal;
        $pindahkas->yang_menyerahkan = $request->yang_menyerahkan;
        $pindahkas->yang_menerima = $request->yang_menerima;
        $pindahkas->pindah_dari_kas = $request->pindah_dari_kas;
        $pindahkas->pindah_ke_kas = $request->pindah_ke_kas;
        $pindahkas->nominal = $request->nominal;
        $pindahkas->save();

        return redirect()->route('data-pindahkas');
    }

    public function destroy(string $id)
    {
        $pindahkas = SalesPindahKas::find($id);
        $pindahkas->delete();

        return redirect('data-pindahkas');
    }
}
