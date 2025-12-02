<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    /**
     * 1. Memberi tahu Laravel nama tabel yang benar.
     * (Standarnya, Laravel akan mencari 'pelanggans').
     */
    protected $table = 'Pelanggan';

    /**
     * 2. Memberi tahu Laravel nama Primary Key yang benar.
     * (Standarnya, Laravel akan mencari 'id').
     */
    protected $primaryKey = 'ID_Pelanggan';

    /**
     * 3. Kolom mana saja yang boleh diisi (Mass Assignment).
     */
    protected $fillable = [
        'ID_Loyalitas',
        'Nama_Pelanggan',
        'NoTelp_Pelanggan',
    ];

    /**
     * 4. (SANGAT DIREKOMENDASIKAN) Definisikan Relasi
     */

    /**
     * Relasi "hasOne": Setiap Pelanggan MEMILIKI SATU data Loyalitas.
     *      */
    public function loyalitas()
    {
        // 'ID_Loyalitas' adalah foreign key di tabel Pelanggan ini
        return $this->hasOne(Loyalitas::class, 'ID_Loyalitas');
    }
    
    /**
     * (OPSIONAL) Relasi "hasMany": Satu Pelanggan mungkin punya BANYAK Transaksi.
     *      */
    // public function transaksis()
    // {
    //     // Asumsi di tabel 'transaksis' ada foreign key 'ID_Pelanggan'
    //     return $this->hasMany(Transaksi::class, 'ID_Pelanggan');
    // }
}