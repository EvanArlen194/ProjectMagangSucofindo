<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pasien',
        'no_antrian',
        'tgl_periksa',
        'jenis_pasien',
        'gol_darah',
        'tinggi_badan',
        'berat_badan',
        'lingkar_pinggang',
        'layanan',
        'keluhan',
        'id_dokter',
        'diagnosa',
        'id_obat',
        'jumlah_obat',
        'keterangan',
        'status'
    ];
    protected $guarded =['id'];
    protected $dates = ['jadwal_kedatangan'];

    public function pasien(){
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }

    public function obat(){
        return $this->belongsTo(Obat::class, 'id_obat');
    }

    public function dokter(){
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }
}
