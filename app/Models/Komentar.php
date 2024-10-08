<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    public function berita() {
        return $this->belongsTo(Berita::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
