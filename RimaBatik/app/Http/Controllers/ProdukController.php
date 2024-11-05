<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function show($id_produk)
    {
        // Retrieve the specific product by ID
        $produk = Produk::findOrFail($id_produk);

        // Retrieve related products for the "You May Also Like" section, excluding the current one
        $relatedProduks = Produk::where('id_produk', '!=', $id_produk)->take(4)->get();

        // Pass the product and related products to the view
        return view('produk', compact('produk', 'relatedProduks'));
    }
    


}
