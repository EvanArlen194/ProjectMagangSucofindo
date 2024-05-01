<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama',
        'alamat',
        'no_telp',
        'id_poli',
        'jadwal_praktek'
        
    ];
    protected $guarded =['id'];

    public function jadwal_praktek()
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_praktek', 'id');
    
    }

    public function rekam_medis(){
        return $this->hasMany(RekamMedis::class);
    }

    public function poli()
    {
        return $this->belongsTo(Poli::class, 'id_poli');
    }
}
