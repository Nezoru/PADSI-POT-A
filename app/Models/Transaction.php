<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'waktu_transaksi',
        'nomor_nota',
        'pelanggan',
        'diskon',
        'pajak',
        'total',
        'tipe_bayar',
    ];

    /**
     * Pastikan 'waktu_transaksi' diperlakukan sebagai objek Tanggal (Carbon).
     *
     * @var array
     */
    protected $casts = [
        'waktu_transaksi' => 'datetime',
    ];
}