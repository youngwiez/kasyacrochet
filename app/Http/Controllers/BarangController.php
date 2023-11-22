<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::latest()->paginate(10);
        return view('product',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'      => 'required',
            'harga'     => 'required',
            'deskripsi' => 'required',
            'foto'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //upload image
        $foto = $request->file('foto');
        $foto->storeAs('public/foto', $foto->hashName());

        //create post
        Barang::create([
            'nama'        => $request->nama,
            'harga'       => $request->harga,
            'deskripsi'   => $request->deskripsi,
            'foto'        => $foto->hashName()
        ]);

        //redirect to index
        return redirect()->route('product')
        ->with(['success' => 'Data Produk Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::find($id);

        //return $rsetSiswa;

        //return view
        return view('show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        //delete image
        Storage::delete('public/foto/'. $barang->foto);

        //delete post
        $barang->delete();

        //redirect to index
        return redirect()->route('product')
        ->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
