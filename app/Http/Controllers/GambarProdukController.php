<?php

namespace App\Http\Controllers;

use App\Models\GambarProduk;
use Illuminate\Http\Request;

class GambarProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($produk_id)
    {
        return view('produk.gambar.create', ['produk_id' => $produk_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $produk_id)
    {
        $validateData = $request->validate([
            'gambar' => 'required|file|image|max:1000'
        ]);

        $extGambar = $request->gambar->getClientOriginalExtension();
        $pathGambar = "produk-".$produk_id.'-'.time().".".$extGambar;
        $pathStore = $request->gambar->move(public_path('gambar/produk'), $pathGambar);

        $gambarProduk = new GambarProduk();
        $gambarProduk->produk_id = $produk_id;
        $gambarProduk->gambar = $pathGambar;
        $gambarProduk->save();

        return redirect('/admin/produk/'.$produk_id)->with('pesan', "Gambar Produk Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GambarProduk  $gambarProduk
     * @return \Illuminate\Http\Response
     */
    public function show(GambarProduk $gambarProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GambarProduk  $gambarProduk
     * @return \Illuminate\Http\Response
     */
    public function edit(GambarProduk $gambarProduk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GambarProduk  $gambarProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GambarProduk $gambarProduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GambarProduk  $gambarProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($produk_id, $gambarProduk)
    {
        $gambar = GambarProduk::find($gambarProduk);
        $gambar->delete();
        return redirect('/admin/produk/'.$produk_id)->with('pesan', "Gambar Produk Berhasil Dihapus");
    }
}
