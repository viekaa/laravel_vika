<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_buku', 'harga', 'stok', 'image', 'id_penerbit', 'tgl_terbit', 'id_genre'];
    public $timestamp   = true;

    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'id_penerbit');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'id_genre');
    }
    // hapus image
    public function deleteImage()
    {

        if ($this->foto && file_exists(public_path('image/produk' . $this->foto))) {
            return unlink(public_path('image/produk' . $this->foto));
        }
    }
}
