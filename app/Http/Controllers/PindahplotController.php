<?php

namespace App\Http\Controllers;

use App\Models\Pindahplot;
use Illuminate\Http\Request;

class PindahplotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pindahplot = Pindahplot::all();
        return view('pindahplot.data-pindahplot', compact('pindahplot'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pindahplot.create-pindahplot');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pindahplot = new Pindahplot();
        $pindahplot -> tanggal = $request -> tanggal;
        $pindahplot -> nota = $request -> nota;
        $pindahplot -> dari_plot = $request -> dari_plot;
        $pindahplot -> ke_plot = $request -> ke_plot;
        $pindahplot -> letak_kas = $request -> letak_kas;
        $pindahplot -> keterangan = $request -> keterangan;
        $pindahplot -> nominal = $request -> nominal;
        $pindahplot -> save();

        return redirect()->route('data-pindahplot')->with('toast_success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pindahplot = Pindahplot::find($id);
        return view('pindahplot.show-pindahplot', compact('pindahplot'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pindahplot = Pindahplot::find($id);
        return view('pindahplot.edit-pindahplot', compact('pindahplot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pindahplot = Pindahplot::find($id);
        $pindahplot -> tanggal = $request -> tanggal;
        $pindahplot -> nota = $request -> nota;
        $pindahplot -> dari_plot = $request -> dari_plot;
        $pindahplot -> ke_plot = $request -> ke_plot;
        $pindahplot -> letak_kas = $request -> letak_kas;
        $pindahplot -> keterangan = $request -> keterangan;
        $pindahplot -> nominal = $request -> nominal;
        $pindahplot -> save();

        return redirect()->route('data-pindahplot')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pindahplot = Pindahplot::find($id);
        $pindahplot->delete();
        return redirect()->route('data-pindahplot')->with('info', 'Data Berhasil Dihapus');
    }
}
