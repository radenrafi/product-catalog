<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
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
        $produks = Produk::paginate(10);
        return view('produk.index', ['produks' => $produks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'link_toko' => 'required',
            'link_wa' => 'required',
            'deskripsi' => 'required'
        ]);

        $produk = new Produk();
        $produk->nama = $validateData['nama'];
        $produk->kategori = $validateData['kategori'];
        $produk->harga = $validateData['harga'];
        $produk->link_toko = $validateData['link_toko'];
        $produk->link_wa = $validateData['link_wa'];
        $produk->deskripsi = $validateData['deskripsi'];
        $produk->klik = 0;
        $produk->save();

        return redirect()->route('produk.index')->with('pesan', "Produk Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        // dd($produk->gambarProduks->toArray());
        return view('produk.show', ['produk' => $produk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        return view('produk.edit', ['produk' => $produk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'link_toko' => 'required',
            'link_wa' => 'required',
            'deskripsi' => 'required'
        ]);

        $produk = Produk::find($produk->id);
        $produk->nama = $validateData['nama'];
        $produk->kategori = $validateData['kategori'];
        $produk->harga = $validateData['harga'];
        $produk->link_toko = $validateData['link_toko'];
        $produk->link_wa = $validateData['link_wa'];
        $produk->deskripsi = $validateData['deskripsi'];
        $produk->save();

        return redirect('/admin/produk/' . $produk->id)->with('pesan', "Produk Berhasil Diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->route('produk.index')->with('pesan', "Produk Berhasil Dihapus");
    }
}
