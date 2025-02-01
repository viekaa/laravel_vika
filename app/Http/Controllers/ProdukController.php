<?php
namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('produk.create', compact('kategori'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama_produk' => 'required',
            'harga'       => 'required',
            'stok'        => 'required',
            'foto'        => 'required',

        ]);

        $produk              = new Produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->harga       = $request->harga;
        $produk->stok        = $request->stok;
        $produk->foto        = $request->foto;
        $produk->id_kategori = $request->id_kategori;

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('image/produk', $name);
            $produk->foto = $name;
        }

        $produk->save();
        return redirect()->route('produk.index')->with('success', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk   = Produk::FindOrFail($id);
        $kategori = Kategori::all();

        return view('produk.show', compact('produk', 'kategori'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk   = Produk::FindOrFail($id);
        $kategori = Kategori::all();

        return view('produk.edit', compact('produk', 'kategori'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $produk              = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->harga       = $request->harga;
        $produk->stok        = $request->stok;
        $produk->id_kategori = $request->id_kategori;

        if ($request->hasFile('foto')) {
            $produk->deleteImage();
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('image/produk', $name);
            $produk->foto = $name;
        }

        $produk->save();

        return redirect()->route('produk.index')->with('success', 'Data berhasil dirubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $produk = produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Data berhasil dihapus');

    }
}
