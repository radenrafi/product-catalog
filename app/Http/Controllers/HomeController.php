<?php

namespace App\Http\Controllers;

use App\Models\GambarProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }

    public function home()
    {
        $produks = Produk::all();
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
        return view('home2', ['produks' => $temp]);
    }

    public function produk()
    {
        $produks = Produk::all();
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

    public function showProduk($id)
    {
        $produk = Produk::find($id);
        $produk->klik++;
        $produk->save();
        $produk = Produk::find($id);
        $gambars = GambarProduk::where('produk_id', $id)->limit(4)->latest()->get();
        return view('produk.showUser', ['produk' => $produk, 'gambars' => $gambars]);
    }

    public function about()
    {
        return view('about');
    }

    public function kategoriProduk($kategori)
    {
        if ($kategori == 'learning-media') {
            $produks = Produk::where('kategori', '=', 'Learning Media')->get();
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
        } elseif ($kategori == 'digital-book') {
            $produks = Produk::where('kategori', '=', 'Buku Digital')->get();
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
        } else {
            $produks = Produk::where('kategori', '=', 'Metaverse')->get();
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
}
