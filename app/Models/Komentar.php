<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    public function berita()
    {
        return $this->belongsTo(Berita::class);
    }
    use HasFactory;
}
