<?php

namespace App\Http\Controllers;

use App\Models\MakananModel;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_makanan = MakananModel::all();
        return view('index', compact('list_makanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('makanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $makanan = new MakananModel;
        $makanan->nama = $request->nama;
        $makanan->harga = $request->harga;
        $makanan->deskripsi = $request->deskripsi;
        $makanan->rating = $request->rating;
        $makanan->save();

        return redirect('/makanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $makanan = MakananModel::find($id);
        return view('makanan.edit', compact('makanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $makanan = MakananModel::find($id);
        $makanan->nama = $request->nama;
        $makanan->harga = $request->harga;
        $makanan->deskripsi = $request->deskripsi;
        $makanan->rating = $request->rating;
        $makanan->save();

        return redirect('/makanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $makanan = MakananModel::find($id);
        $makanan->delete();
        return redirect('/makanan');
    }
}
