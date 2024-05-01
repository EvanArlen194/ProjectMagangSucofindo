<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_pasien',
        'nama',
        'alamat',
        'tgl_lahir',
        'nik',
        'jenis_kelamin',
        'telepon'
    ];
    protected $guarded =['id'];

    protected $dates = ['tgl_lahir', 'created_at', 'updated_at', 'jadwal_kedatangan', 'jadwal_selesai'];

    public function rekam_medis(){
        return $this->hasMany(RekamMedis::class, 'id');
    }
}
