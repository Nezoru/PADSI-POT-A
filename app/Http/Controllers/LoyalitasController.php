<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loyalitas; // <-- Pastikan Anda meng-import Model Loyalitas

class LoyalitasController extends Controller
{
    /**
     * Menampilkan halaman loyalitas, termasuk leaderboard dan tabel.
     */
    public function index()
    {
        // 1. Ambil data untuk Leaderboard (Top 3)
        // Diurutkan berdasarkan 'Jumlah_Transaksi' secara descending (terbanyak ke terkecil)
        $leaderboard = Loyalitas::orderBy('Jumlah_Transaksi', 'desc')
                                ->take(3) // Ambil 3 teratas
                                ->get();

        // 2. Ambil semua data Loyalitas untuk tabel
        // Diurutkan berdasarkan nama (A-Z) dan diberi pagination
        $loyalitasData = Loyalitas::orderBy('ID_Loyalitas', 'asc')
                                  ->paginate(15); // Tampilkan 15 data per halaman

        // 3. Kirim kedua data tersebut ke View
        return view('loyalitas.index', [
            'leaderboard' => $leaderboard,
            'semuaLoyalitas' => $loyalitasData
        ]);
    }
}