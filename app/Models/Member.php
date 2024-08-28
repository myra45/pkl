<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;


    // Definisikan relasi one-to-many
    public function presensi()
    {
        return $this->hasMany(Presensi::class, 'member_id', 'id');
    }
}
