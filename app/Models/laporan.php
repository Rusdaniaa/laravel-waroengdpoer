<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_transaksi', 'id_pelanggan', 'total_bayar', 'metode_pembayaran'
    ];

    // Metode akses untuk mendapatkan URL gambar
    public function getGambarUrlAttribute()
    {
        return asset('images\products' . $this->nama_barang);
        
    }
}
