<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Produk;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show(){

        $produks = Produk::latest()->take(4)->get();
        $testimonis = Testimoni::all();
        $events = Event::latest()->take(4)->get();
        return view('index', compact('produks', 'testimonis', 'events'));
    }
}
