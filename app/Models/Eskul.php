<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory;

    public function rUsers()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

}
