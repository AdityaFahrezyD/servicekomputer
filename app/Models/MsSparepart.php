<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsSparepart extends Model
{
    use HasFactory;

    protected $table = 'ms_spareparts';

    protected $fillable = [
        'nama_sparepart',
        'harga',
    ];
}
