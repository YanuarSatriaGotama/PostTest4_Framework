<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elektronik extends Model
{
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
    use HasFactory;

    protected $table = 'elektroniks';
    protected $fillable = ['id', 'nama_barang', 'harga', 'jenis', 'karyawan_id'];
}
