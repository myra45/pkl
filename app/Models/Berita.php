<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    public function komentar()
     {
         return $this->hasMany(Komentar::class);
     }

     public function rCategory()
     {
        return $this->belongsTo(BeritaCategory::class, 'berita_category_id', 'id');
     }

}
