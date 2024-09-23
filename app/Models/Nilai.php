<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    public function event()
    {
        return $this->belongsTo(EventPenilian::class, 'event_penilaian_id');
    }
}
