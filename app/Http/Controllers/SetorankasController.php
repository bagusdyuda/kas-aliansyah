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
        $setorankas->tanggal_setoran = $request->tanggal_setoran;
        $setorankas->penerima = $request->penerima;
        $setorankas->keperluan = $request->keperluan;
        $setorankas->nominal = $request->nominal;
        $setorankas->save();

        return redirect()->route('data-setorkas');
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
        $setorankas->tanggal_setoran = $request->tanggal_setoran;
        $setorankas->penerima = $request->penerima;
        $setorankas->keperluan = $request->keperluan;
        $setorankas->nominal = $request->nominal;
        $setorankas->save();

        return redirect()->route('data-setorkas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $setorankas = Setorankas::find($id);
        $setorankas->delete();

        return redirect('data-setorkas');
    }
}
