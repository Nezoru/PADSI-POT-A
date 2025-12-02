<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loyalitas extends Model
{
    use HasFactory;

    /**
     * 1. Memberi tahu Laravel nama tabel yang benar.
     */
    protected $table = 'Loyalitas';

    /**
     * 2. Memberi tahu Laravel nama Primary Key yang benar.
     */
    protected $primaryKey = 'ID_Loyalitas';

    /**
     * 3. Kolom mana saja yang boleh diisi (Mass Assignment).
     */
    protected $fillable = [
        'ID_Pelanggan',
        'ID_Transaksi',
        'Nama_Pelanggan',
        'NoTelp_Pelanggan',
        'Jumlah_Transaksi',
        'Jumlah_Diskon',
    ];

    /**
     * 4. Definisikan Relasi
     */

    /**
     * Relasi "belongsTo": Setiap data Loyalitas DIMILIKI OLEH satu Transaksi.
     */
    public function transaksi()
    {
        // 'ID_Transaksi' adalah foreign key di tabel Loyalitas ini
        // GANTI 'Transaksi::class' MENJADI 'Transaction::class'
        return $this->belongsTo(Transaction::class, 'ID_Transaksi'); // <-- INI DIA PERBAIKANNYA
    }

    /**
     * Relasi "belongsTo": Setiap data Loyalitas DIMILIKI OLEH satu Pelanggan.
     */
    public function pelanggan()
    {
        // 'ID_Pelanggan' adalah foreign key di tabel Loyalitas ini
        return $this->belongsTo(Pelanggan::class, 'ID_Pelanggan');
    }
}