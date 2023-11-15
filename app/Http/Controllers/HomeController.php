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
        $produkAkriliks = Produk::where('kategori', 'Akrilik')->limit(3)->get();
        $produkBukets = Produk::where('kategori', 'Buket')->limit(3)->get();
        $produkSimpleFrames = Produk::where('kategori', 'Simple Frame')->limit(3)->get();
        $produk3DFrames = Produk::where('kategori', '3D Frame')->limit(3)->get();

        return view('home2', ['produkAkriliks' => $produkAkriliks, 'produkBukets' => $produkBukets, 'produkSimpleFrames' => $produkSimpleFrames, 'produk3DFrames' => $produk3DFrames]);
    }

    public function produk()
    {
        $produks = Produk::paginate(10);
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
            $produks = Produk::where('kategori', '=', 'Akrilik')->paginate(10);
        } elseif ($kategori == 'buket') {
            $produks = Produk::where('kategori', '=', 'Buket')->paginate(10);
        } elseif ($kategori == 'simple-frame') {
            $produks = Produk::where('kategori', '=', 'Simple Frame')->paginate(10);
        } elseif ($kategori == '3d-frame') {
            $produks = Produk::where('kategori', '=', '3D Frame')->paginate(10);
        }
        return view('produk.indexUser', ['produks' => $produks]);
    }
}
