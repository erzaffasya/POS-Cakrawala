<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $fillable = [
       'no','nama','alamat','nomor_hp','npwp','ktp', 'status', 'image'
    ];

    protected $primaryKey = 'id';

}
