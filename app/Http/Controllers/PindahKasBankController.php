<?php

namespace App\Http\Controllers;

use App\Models\PindahKasBank;
use Illuminate\Http\Request;

class PindahKasBankController extends Controller
{
    public function index()
    {
        $pindahkasbank = PindahKasBank::all();
        return view('pindahkasbank.data-pindahkasbank', compact('pindahkasbank'));
    }

    public function create()
    {
        return view('pindahkasbank.create-pindahkasbank');
    }

    public function store(Request $request)
    {
        $pindahkasbank = new PindahKasBank();
        $pindahkasbank->tanggal = $request->tanggal;
        $pindahkasbank->kas_bank = $request->kas_bank;
        $pindahkasbank->pindah_ke = $request->pindah_ke;
        $pindahkasbank->keterangan = $request->keterangan;
        $pindahkasbank->nominal = $request->nominal;
        $pindahkasbank->save();

        return redirect()->route('data-pindahkasbank');
    }

    public function show(string $id)
    {
        $pindahkasbank = PindahKasBank::find($id);
        return view('pindahkasbank.show-pindahkasbank', compact('pindahkasbank'));
    }

    public function edit(string $id)
    {
        $pindahkasbank = PindahKasBank::find($id);
        return view('pindahkasbank.edit-pindahkasbank', compact('pindahkasbank'));
    }

    public function update(string $id, Request $request)
    {
        $pindahkasbank = PindahKasBank::find($id);
        $pindahkasbank->tanggal = $request->tanggal;
        $pindahkasbank->kas_bank = $request->kas_bank;
        $pindahkasbank->pindah_ke = $request->pindah_ke;
        $pindahkasbank->keterangan = $request->keterangan;
        $pindahkasbank->nominal = $request->nominal;
        $pindahkasbank->save();

        return redirect()->route('data-pindahkasbank');
    }

    public function destroy(string $id)
    {
        $pindahkasbank = PindahKasBank::find($id);
        $pindahkasbank->delete();

        return redirect('data-pindahkasbank');
    }
}
