<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_barang', 'harga', 'stok', 'keterangan'
    ];

    // Metode akses untuk mendapatkan URL gambar
    public function getGambarUrlAttribute()
    {
        return asset('images\products' . $this->nama_barang);
        
    }
}
