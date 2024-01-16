<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $fillable = ['image', 'nama_produk', 'kategori', 'harga', 'keterangan', 'stok'];

    public function category()
    {
        return $this->belongsTo(Kategori::class, 'kategori', 'id');
    }
}
