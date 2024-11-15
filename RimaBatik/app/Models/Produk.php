<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $primaryKey = 'id_produk';

    protected $fillable = ['namaproduk', 'gambar', 'harga', 'stok', 'deskripsi', 'bahan', 'link'];
}
