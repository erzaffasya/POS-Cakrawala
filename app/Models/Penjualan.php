<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan';
    protected $fillable = [
       'no', 'tgl_faktur', 'tgl_jatuhtempo','nama_penerima','alamat_penerima','nomor_hp','NPWP','diskon','total'
    ];

    protected $primaryKey = 'id';

}
