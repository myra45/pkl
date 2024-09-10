<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaCategory extends Model
{
    use HasFactory;
    public function rBerita()
    {
        return $this->hasMany(Berita::class, 'berita_category_id', 'id');
    }
}
