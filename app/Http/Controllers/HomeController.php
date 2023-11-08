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

    private function produkGambar($produks)
    {
        $i = 0;
        $temp = collect([]);
        foreach ($produks as $produk) {
            if ($i == 0) {
                $gambar = GambarProduk::where('produk_id', $produk->id)->latest()->first();
                if ($gambar == null) {
                    $temp->push(['id' => $produk->id, 'nama' => $produk->nama, 'harga' => $produk->harga, 'gambar' => 'kosong.jpg']);
                } else {
                    $temp->push(['id' => $produk->id, 'nama' => $produk->nama, 'harga' => $produk->harga, 'gambar' => $gambar->gambar]);
                }
                $i++;
            } else {
                $gambar = GambarProduk::where('produk_id', $produk->id)->latest()->first();
                if ($gambar == null) {
                    $temp->push(['id' => $produk->id, 'nama' => $produk->nama, 'harga' => $produk->harga, 'gambar' => 'kosong.jpg']);
                } else {
                    $temp->push(['id' => $produk->id, 'nama' => $produk->nama, 'harga' => $produk->harga, 'gambar' => $gambar->gambar]);
                }
            }
        }
        return $temp;
    }

    public function home()
    {
        $produkAkriliks = Produk::where('kategori', 'Akrilik')->limit(4)->get();
        $produkBukets = Produk::where('kategori', 'Buket')->limit(4)->get();
        $produkSimpleFrames = Produk::where('kategori', 'Simple Frame')->limit(4)->get();
        $produk3DFrames = Produk::where('kategori', '3D Frame')->limit(4)->get();

        $produkAkriliks = $this->produkGambar($produkAkriliks);
        $produkBukets = $this->produkGambar($produkBukets);
        $produkSimpleFrames = $this->produkGambar($produkSimpleFrames);
        $produk3DFrames = $this->produkGambar($produk3DFrames);

        return view('home2', ['produkAkriliks' => $produkAkriliks, 'produkBukets' => $produkBukets, 'produkSimpleFrames' => $produkSimpleFrames, 'produk3DFrames' => $produk3DFrames]);
    }

    public function produk()
    {
        $produks = Produk::paginate(10);
        $produks = $this->produkGambar($produks);
        dd($produks);
        return view('produk.indexUser', ['produks' => $produks]);
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
        if ($kategori == 'akrilik') {
            $produks = Produk::where('kategori', '=', 'Akrilik')->get();
            $produks = $this->produkGambar($produks);

            return view('produk.indexUser', ['produks' => $produks]);
        } elseif ($kategori == 'buket') {
            $produks = Produk::where('kategori', '=', 'Buket')->get();
            $produks = $this->produkGambar($produks);

            return view('produk.indexUser', ['produks' => $produks]);
        } elseif ($kategori == 'simple-frame') {
            $produks = Produk::where('kategori', '=', 'Simple Frame')->get();
            $produks = $this->produkGambar($produks);

            return view('produk.indexUser', ['produks' => $produks]);
        } elseif ($kategori == '3d-frame') {
            $produks = Produk::where('kategori', '=', '3D Frame')->get();
            $produks = $this->produkGambar($produks);

            return view('produk.indexUser', ['produks' => $produks]);
        }
    }
}
