<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = [
        'id','nama', 'harga', 'detail','stok','gambar','kategori_id'
    ];

    protected $primaryKey = 'id';

    public function kategori(){
        return $this->belongsTo(Kategori::class,'kategori_id','id');
    }
}
