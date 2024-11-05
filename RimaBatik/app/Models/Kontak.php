<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    protected $table = 'kontak'; 

    // protected $increment = true;

    protected $primaryKey = 'id_kontak'; 

    protected $fillable = ['whatsapp', 'alamat', 'email']; // Kolom yang bisa diisi

    // protected $guarded = []; // Kolom yang bisa diisi
}
