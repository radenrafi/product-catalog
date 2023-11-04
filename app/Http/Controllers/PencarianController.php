<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\GambarProduk;
use Illuminate\Http\Request;

class PencarianController extends Controller
{
    public function proses(Request $request)
    {
        $produks = Produk::where('nama', 'LIKE', '%'.$request->s.'%')->get();
        $i = 0;
            $temp = collect([]);
            foreach ($produks as $produk) {
                if ($i == 0) {
                    $gambar = GambarProduk::where('produk_id', $produk->id)->latest()->first();
                    if ($gambar == null) {
                        $temp->push(['id' => $produk->id, 'nama' => $produk->nama, 'harga' => $produk->harga, 'gambar' => 'kosong.jpg']);
                    }else{
                        $temp->push(['id' => $produk->id, 'nama' => $produk->nama, 'harga' => $produk->harga, 'gambar' => $gambar->gambar]);
                    }
                    $i++;
                }
                else {
                    $gambar = GambarProduk::where('produk_id', $produk->id)->latest()->first();
                    if ($gambar == null) {
                        $temp->push(['id' => $produk->id, 'nama' => $produk->nama, 'harga' => $produk->harga, 'gambar' => 'kosong.jpg']);
                    }else{
                        $temp->push(['id' => $produk->id, 'nama' => $produk->nama, 'harga' => $produk->harga, 'gambar' => $gambar->gambar]);
                    }
                }
            }
            return view('produk.indexUser', ['produks' => $temp]);
    }
}
