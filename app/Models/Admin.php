<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the user that owns the Admin
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rExtracurricular(): BelongsTo
    {
        return $this->belongsTo(Eskul::class, 'eskul_id', 'id');
    }

    public function eskul()
    {
        return $this->hasOne(Eskul::class, 'admin_id'); // 'admin_id' adalah foreign key di tabel Eskul
    }


    protected static function booted()
    {
        static::deleting(function ($admin) {
        // Cek apakah admin memiliki data eskul terkait
           if ($admin->eskul) {
            $admin->eskul->delete();
           }
        });
    }
}
