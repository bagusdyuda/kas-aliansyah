<?php

namespace App\Http\Controllers;

use App\Models\SetoranPindahTransferSales;
use Illuminate\Http\Request;

class SetoranpindahtransfersalesController extends Controller
{
    public function index()
    {
        $setoranpindahtransfersales = SetoranPindahTransferSales::all();
        return view('setoranpindahtransfersales.data-setoranpindahtransfersales', compact('setoranpindahtransfersales'));
    }

    public function create()
    {
        return view('setoranpindahtransfersales.create-setoranpindahtransfersales');
    }

    public function store(Request $request)
    {
        $setoranpindahtransfersales = new SetoranPindahTransferSales();
        $setoranpindahtransfersales->tanggal = $request->tanggal;
        $setoranpindahtransfersales->sales = $request->sales;
        $setoranpindahtransfersales->no_ref = $request->no_ref;
        $setoranpindahtransfersales->bank = $request->bank;
        $setoranpindahtransfersales->nominal = $request->nominal;
        $setoranpindahtransfersales->save();

        return redirect()->route('data-setoranpindahtransfersales');
    }

    public function show(string $id)
    {
        $setoranpindahtransfersales = SetoranPindahTransferSales::find($id);
        return view('setoranpindahtransfersales.show-setoranpindahtransfersales', compact('setoranpindahtransfersales'));
    }

    public function edit(string $id)
    {
        $setoranpindahtransfersales = SetoranPindahTransferSales::find($id);
        return view('setoranpindahtransfersales.edit-setoranpindahtransfersales', compact('setoranpindahtransfersales'));
    }

    public function update(string $id,Request $request)
    {
        $setoranpindahtransfersales = SetoranPindahTransferSales::find($id);
        $setoranpindahtransfersales->tanggal = $request->tanggal;
        $setoranpindahtransfersales->sales = $request->sales;
        $setoranpindahtransfersales->no_ref = $request->no_ref;
        $setoranpindahtransfersales->bank = $request->bank;
        $setoranpindahtransfersales->nominal = $request->nominal;
        $setoranpindahtransfersales->save();

        return redirect()->route('data-setoranpindahtransfersales');
    }

    public function destroy(string $id)
    {
        $setoranpindahtransfersales = SetoranPindahTransferSales::find($id);
        $setoranpindahtransfersales->delete();

        return redirect('data-setoranpindahtransfersales');
    }
}
