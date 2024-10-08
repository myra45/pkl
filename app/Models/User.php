<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    public function getProfilePictureUrlAttribute()
    {
        return $this->profile_img ? asset('storage/uploads/' . $this->profile_img) : asset('uploads/default-profile.png');
    }

    use HasApiTokens, HasFactory, Notifiable;

    public function rEskul()
    {
        return $this->hasMany(Eskul::class, 'admin_id');
    }


    public function Extracurricular()
    {
        return $this->belongsTo(Eskul::class, 'eskul_id', 'id');
    }

    public function eskul()
    {
        return $this->hasOne(Eskul::class, 'admin_id'); // 'admin_id' adalah foreign key di tabel Eskul
    }

    public function presensis()
    {
        return $this->hasMany(Presensi::class);
    }
    
    protected $guarded = [];


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
