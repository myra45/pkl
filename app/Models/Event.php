<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function eskuls()
    {
        return $this->belongsTo(Eskul::class);
    }

    public function eskul()
    {
        return $this->belongsTo(Eskul::class);
    }
  
    // Relasi ke tabel Presensi
    public function presensis()
    {
        return $this->hasMany(Presensi::class);
    }
}
