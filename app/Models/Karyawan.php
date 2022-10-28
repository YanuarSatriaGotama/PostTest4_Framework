<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model {
    public function elektronik() {
        return $this->hasMany(Elektronik::class);
    }
    
    use HasFactory;
    protected $table = 'karyawans';
    protected $fillable = ['id','nama','kode'];
}

