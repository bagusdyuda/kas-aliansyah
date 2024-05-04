<?php

namespace App\Http\Controllers;

use App\Models\RincianNotaSales;
use Illuminate\Http\Request;

class RincianNotaSalesController extends Controller
{
    public function index()
    {
        $rinciannotasales = RincianNotaSales::all();
        return view('rinciannotasales.data-rinciannotasales', compact('rinciannotasales'));
    }

    public function create()
    {
        return view('rinciannotasales.create-rinciannotasales');
    }

    public function store(Request $request)
    {
        $rinciannotasales = new RincianNotaSales();
        $rinciannotasales->id_unit = $request->id_unit;
        $rinciannotasales->nama_unit = $request->nama_unit;
        $rinciannotasales->tanggal_setor = $request->tanggal_setor;
        $rinciannotasales->nama_customer = $request->nama_customer;
        $rinciannotasales->nominal = $request->nominal;
        $rinciannotasales->save();

        return redirect()->route('data-rinciannotasales');
    }

    public function show(string $id)
    {
        $rinciannotasales = RincianNotaSales::find($id);
        return view('rinciannotasales.show-rinciannotasales', compact('rinciannotasales'));
    }

    public function edit(string $id)
    {
        $rinciannotasales = RincianNotaSales::find($id);
        return view('rinciannotasales.edit-rinciannotasales', compact('rinciannotasales'));
    }

    public function update(string $id, Request $request)
    {
        $rinciannotasales = RincianNotaSales::find($id);
        $rinciannotasales->id_unit = $request->id_unit;
        $rinciannotasales->nama_unit = $request->nama_unit;
        $rinciannotasales->tanggal_setor = $request->tanggal_setor;
        $rinciannotasales->nama_customer = $request->nama_customer;
        $rinciannotasales->nominal = $request->nominal;
        $rinciannotasales->save();

        return redirect()->route('data-rinciannotasales');
    }

    public function destroy(string $id)
    {
        $rinciannotasales = RincianNotaSales::find($id);
        $rinciannotasales->delete();

        return redirect('data-rinciannotasales');

    }


}
