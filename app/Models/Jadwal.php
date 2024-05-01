<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $fillable = [
        'jadwal_praktek'
        
    ];
    protected $guarded =['id'];
    public function dokter()
    {

        return $this->hasMany(Dokter::class);
    }
}
