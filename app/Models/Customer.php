<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Customer extends Authenticatable
{
    use Notifiable;

    // Nama tabel (defaultnya diambil dari nama model dalam bentuk jamak)
    protected $table = 'customers';

    // Primary Key
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi secara mass-assignment
    protected $fillable = [
        'email',
        'nama',
        'alamat',
        'hp',
        'password',
    ];

    // Hidden fields, misalnya untuk password
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Casts untuk jenis kolom tertentu
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    // Jika menggunakan hashing password, kita perlu mengatur mutator untuk password
    // public function setPasswordAttribute($password)
    // {
    //     $this->attributes['password'] = bcrypt($password);
    // }
}
