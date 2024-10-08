<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsService extends Model
{
    use HasFactory;

    protected $table = 'ms_services';

    protected $fillable = [
        'nama_service',
        'harga',
    ];
}
