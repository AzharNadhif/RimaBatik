<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function show() {
        $kontak = Kontak::first(); // Mengambil kontak pertama
        if ($kontak) {
            $alamatLengkap = $kontak->alamat;
            $alamatPendek = strtok($alamatLengkap, ','); // Mengambil bagian sebelum koma pertama
        } else {
            $alamatPendek = ''; // Jika kontak tidak ditemukan
        }
        return view('kontak', compact('kontak', 'alamatPendek'));
    }
    
}
