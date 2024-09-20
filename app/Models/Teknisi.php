<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Teknisi extends Authenticatable
{
    use Notifiable;

    protected $table = 'teknisis';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $fillable = [
        'nama',
        'alamat',
        'hp',
        'username',
        'password',
        'status',
        'job_desk',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
