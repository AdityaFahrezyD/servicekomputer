<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrPesanan extends Model
{
    use HasFactory;

    protected $table = 'tr_pesanans'; // Specify the table

    protected $fillable = [
        'customer_id',
        'id_teknisi',
        'tanggal_pesanan',
        'estimasi_biaya',
        'estimasi_waktu',
        'status_service',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function teknisi()
    {
        return $this->belongsTo(Teknisi::class, 'id_teknisi');
    }

}
