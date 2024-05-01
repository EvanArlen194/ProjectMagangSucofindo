<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_obat',
        'nama',
        'gambar_obat',
        'tgl_expired',
        'stok',
        'id_jenis',
        'dosis',
        'harga'
    ];

    protected $guarded =['id'];

    public function rekam_medis(){
        return $this->hasMany(Pasien::class);
    }

    public function jenis_obat(){
        return $this->belongsTo(JenisObat::class, 'id_jenis');
    }
}
