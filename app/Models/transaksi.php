<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'jumlah', 'tgl_transaksi', 'id_buku', 'id_pembeli'];
    public $timestamp   = true;

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }

    public function pembeli()
    {
        return $this->belongsTo(pembeli::class, 'id_pembeli');
    }
}
