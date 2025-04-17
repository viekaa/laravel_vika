<?php
namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;

class FrontController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('welcome', compact('produk'));

    }
    public function show($id)
    {
        $produk   = Produk::FindOrFail($id);
        $kategori = Kategori::all();

        return view('front.show', compact('produk', 'kategori'));

    }

}
