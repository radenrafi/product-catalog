<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\GambarProduk;
use Illuminate\Http\Request;

class PencarianController extends Controller
{
    public function proses(Request $request)
    {
        $produks = Produk::where('nama', 'LIKE', '%' . $request->s . '%')->paginate(10);

        return view('produk.indexUser', ['produks' => $produks]);
    }
}
