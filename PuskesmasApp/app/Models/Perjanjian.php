<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perjanjian extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'perjanjians';
    public function pasien()
    {
        return $this->belongsTo(User::class);
    }
}
