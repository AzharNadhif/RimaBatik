<?php

// app/Http/Controllers/AdminController.php
namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Kontak;
use App\Models\Produk;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::all();
        $testimonis = Testimoni::all();
        $produks = Produk::all();
        $events = Event::all();
        return view('admin', compact('kontaks', 'testimonis', 'produks', 'events'));
    }

    // KONTAK
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'whatsapp' => 'required|string|max:25',
            'alamat' => 'required|string',
            'email' => 'required|email',
        ]);        

        // Simpan data ke database
        Kontak::create([
            'whatsapp' => $request->whatsapp,
            'alamat' => $request->alamat,
            'email' => $request->email,
        ]);

        // Redirect kembali ke halaman admin dengan pesan sukses
        return redirect()->route('admin')->with('success', 'Kontak berhasil ditambahkan!');
    }
    
    public function update(Request $request, $id_kontak)
    {
        // Validasi data
        $request->validate([
            'whatsapp' => 'required|string|max:25',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string|max:255'
        ]);

        $kontak = Kontak::findOrFail($id_kontak);
        $kontak->update($request->all());

        return redirect()->route('admin')->with('success', 'Kontak berhasil diperbarui');
    }


    public function destroy($id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();
        return redirect()->route('admin')->with('success', 'Kontak berhasil dihapus');
    }
    // AKHIR KONTAK

    // TESTIMONI
    public function tambahTestimoni(Request $request){
        // Validasi input
        $request->validate([
            'nama' => 'required|string',
            'isi' => 'required|string',
        ]);

        // Simpan data ke database
        Testimoni::create([
            'nama' => $request->nama,
            'isi' => $request->isi,
        ]);

        // Redirect kembali ke halaman admin dengan pesan sukses
        return redirect()->route('admin')->with('success', 'Testimoni berhasil ditambahkan!');
    }

    public function updateTestimoni(Request $request, $id_testimoni)
    {
        $testimoni = Testimoni::findOrFail($id_testimoni);
        $testimoni->update($request->all());
        return redirect()->route('admin')->with('success', 'Testimoni berhasil diperbarui');
    }

    public function hapusTestimoni($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->delete();
        return redirect()->route('admin')->with('success', 'Testimoni berhasil dihapus');
    }
    // AKHIR TESTIMONI


    // PRODUK
    public function storeProduct(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'namaproduk' => 'required|string|max:255',
            'gambar.*' => 'image|mimes:jpeg,png,jpg,gif|max:8120',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'deskripsi' => 'required|string',
            'bahan' => 'required|string',
            'link' => 'required|url',
        ]);
        

        $images = [];
        if($request->hasfile('gambar')){
            foreach($request->file('gambar') as $image){
                $path = 'assets/img/products/' . $image->getClientOriginalName();
                $image->move(public_path('assets/img/products'), $image->getClientOriginalName());
                $images[] = $path;
            }
        }


        Produk::create([
            'namaproduk' => $request->namaproduk,
            'gambar' => json_encode($images),
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'bahan' => $request->bahan,
            'link' => $request->link,
        ]);

        return redirect()->route('admin')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Produk::findOrFail($id);

        // Validasi input
        $request->validate([
            'namaproduk' => 'required|string|max:255',
            'gambar.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'deskripsi' => 'required|string',
            'bahan' => 'required|string',
            'link' => 'required|url',
        ]);

        // Ambil gambar yang sudah ada dari database
        $images = json_decode($product->gambar, true);

        // Jika ada gambar baru diunggah, simpan dan hapus gambar lama yang tidak diperlukan
        if($request->hasfile('gambar')){
            // Hapus gambar lama jika ada gambar baru diunggah
            foreach($images as $oldImage) {
                if (file_exists(public_path($oldImage))) {
                    unlink(public_path($oldImage));
                }
            }

            // Reset array gambar dan tambahkan gambar baru
            $images = [];
            foreach($request->file('gambar') as $image){
                $path = 'assets/img/products/' . $image->getClientOriginalName();
                $image->move(public_path('assets/img/products'), $image->getClientOriginalName());
                $images[] = $path;
            }
        }

        // Update data produk
        $product->update([
            'namaproduk' => $request->namaproduk,
            'gambar' => json_encode($images),
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'bahan' => $request->bahan,
            'link' => $request->link,
        ]);

        return redirect()->route('admin')->with('success', 'Produk berhasil diupdate.');
    }

    public function destroyProduct($id)
    {
        $product = Produk::findOrFail($id);
        $product->delete();

        return redirect()->route('admin')->with('success', 'Produk berhasil dihapus.');
    }


    // EVENT
    public function tambahEvent(Request $request)
    {
        $validatedData = $request->validate([
            'namaacara' => 'required|string',
            'gambar.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $images = [];
        if($request->hasfile('gambar')){
            foreach($request->file('gambar') as $image){
                $path = 'assets/img/event/' . $image->getClientOriginalName();
                $image->move(public_path('assets/img/event'), $image->getClientOriginalName());
                $images[] = $path;
            }
        }

        Event::create([
            'namaacara' => $validatedData['namaacara'],
            'gambar' => json_encode($images),
            'deskripsi' => $validatedData['deskripsi'],
        ]);

        return redirect()->route('admin')->with('success', 'Event berhasil ditambahkan.');
    }

    public function updateEvent(Request $request, $id_event)
    {
        $event = Event::findOrFail($id_event);

        // Update nama acara dan deskripsi
        // Validasi input
        $request->validate([
            'namaacara' => 'required|string|max:255',
            'gambar.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string',
        ]);

        
        // Ambil gambar yang sudah ada dari database
        $images = json_decode($event->gambar, true);

        // Jika ada gambar baru diunggah, simpan dan hapus gambar lama yang tidak diperlukan
        if($request->hasfile('gambar')){
            // Hapus gambar lama jika ada gambar baru diunggah
            foreach($images as $oldImage) {
                if (file_exists(public_path($oldImage))) {
                    unlink(public_path($oldImage));
                }
            }

            // Reset array gambar dan tambahkan gambar baru
            $images = [];
            foreach($request->file('gambar') as $image){
                $path = 'assets/img/event/' . $image->getClientOriginalName();
                $image->move(public_path('assets/img/event'), $image->getClientOriginalName());
                $images[] = $path;
            }
        }


        $event->update([
            'namaacara' => $request->namaacara,
            'gambar' => json_encode($images),
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin')->with('success', 'Event berhasil diperbarui.');

    }


    public function hapusEvent($id_event)
    {
        $event = Event::findOrFail($id_event);
        $event->delete();

        return redirect()->route('admin')->with('success', 'Event berhasil dihapus.');

    }

    // AKHIR EVENT






}


