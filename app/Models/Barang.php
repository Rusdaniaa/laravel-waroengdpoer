<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Barang extends Model
{
    use softDeletes;
    protected $table = 'barangs';
    protected $guarded = [];

    protected $dates = ['deleted_at'];

    //protected $hidden;

    // Metode akses untuk mendapatkan URL gambar
    public function getGambarUrlAttribute()
    {
        return asset('images\products' . $this->barang);

    }
}
