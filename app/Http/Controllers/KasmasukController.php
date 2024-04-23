<?php

namespace App\Http\Controllers;

use App\Models\Kasmasuk;
use Illuminate\Http\Request;

class KasmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kasmasuk = Kasmasuk::all();
        return view('kasmasuk.data-kasmasuk',compact('kasmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kasmasuk.create-kasmasuk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kasmasuk::create([
        'tanggal' => $request->tanggal,
        'nota' => $request->nota,
        'penyerah' => $request->penyerah,
        'id_user' => $request->id_user,
        'dari_kas' => $request->dari_kas,
        'plot' => $request->plot,
        'nominal' => $request->nominal,
        ]);

        return redirect('data-kasmasuk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kasmasuk = Kasmasuk::find($id);
        return view('kasmasuk.show-kasmasuk', compact('kasmasuk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kasmasuk = Kasmasuk::findorfail($id);
        return view('kasmasuk.edit-kasmasuk',compact('kasmasuk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kasmasuk = Kasmasuk::findorfail($id);
        $kasmasuk->update($request->all());

        return redirect('data-kasmasuk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kasmasuk = Kasmasuk::findorfail($id);
        $kasmasuk->delete();

        return redirect('data-kasmasuk');
    }
}
