<?php

namespace App\Http\Controllers;

use App\Models\Kaskantor;
use Illuminate\Http\Request;

class KaskantorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kaskantor = Kaskantor::all();
        return view('kaskantor.data-kaskantor', compact('kaskantor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kaskantor.create-kaskantor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kaskantor = new Kaskantor();
        $kaskantor->tanggal_masuk = $request->tanggal_masuk;
        $kaskantor->nota = $request->nota;
        $kaskantor->letak_setoran = $request->letak_setoran;
        $kaskantor->plot = $request->plot;
        $kaskantor->pengirim = $request->pengirim;
        $kaskantor->penerima = $request->penerima;
        $kaskantor->keperluan = $request->keperluan;
        $kaskantor->keterangan = $request->keterangan;
        $kaskantor->nominal = $request->nominal;
        $kaskantor->save();

        return redirect()->route('data-kaskantor');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kaskantor $kaskantor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kaskantor $kaskantor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kaskantor $kaskantor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kaskantor $kaskantor)
    {
        //
    }
}
