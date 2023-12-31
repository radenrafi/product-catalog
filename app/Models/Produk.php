<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    public function gambarProduks()
    {
        return $this->hasMany('App\Models\GambarProduk');
    }
}
