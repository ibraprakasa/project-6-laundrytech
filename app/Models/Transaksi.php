<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'user_id',
        'pakaian_id',
        'pemesanan_id',
        'total_berat',
        'diskon',
        'tgl_ditimbang',
        'tgl_diambil',
        'total_bayar',
        'status_pembayaran',
        'bukti_pembayaran'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pakaian()
    {
        return $this->belongsTo(Pakaian::class);
    }

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'pemesanan_id');
    }
}
