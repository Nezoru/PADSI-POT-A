<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\LoyalitasController;
use App\Http\Controllers\TrendController;

use App\Http\Middleware\CekRole; // 
use App\Http\Controllers\DashboardController; // Asumsi ada controller untuk dashboard default

/*
|--------------------------------------------------------------------------
| Public & Auth Routes
|--------------------------------------------------------------------------
*/

// Route untuk Login (tujuan redirect saat gagal otorisasi)
// Route::get('login', [LoginController::class, 'showLoginForm'])->name('auth.login');
// // Asumsi Anda punya route untuk proses login (post) dan logout di sini juga.

// // Route untuk Halaman Dashboard Default (Tujuan redirect, harus selalu bisa diakses)
// // Saya asumsikan segmen utamanya adalah 'dashboard'
// Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', function () {
     return view('auth.login');
});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);


/*
|--------------------------------------------------------------------------
| Protected Routes (Routes yang memerlukan Otorisasi CekRole)
|--------------------------------------------------------------------------
| Middleware CekRole akan dijalankan untuk semua route di dalam group ini.
*/

Route::middleware(['auth'])->group(function () {

     Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

     Route::prefix('transactions')->group(function () {
          // 1. Halaman Index
          Route::get('index', [TransactionController::class, 'index'])
               ->middleware(CekRole::class . ':1,2')
               ->name('transactions.index');

          // 2. Halaman Form Import (GET)
          // Nama route ini HARUS 'transactions.import.form' agar cocok dengan Blade Anda
          Route::get('import', [TransactionController::class, 'showImportForm']) // Pastikan nama method di controller benar (showImportForm atau import)
               ->middleware(CekRole::class . ':1')
               ->name('transactions.import.form');

          // 3. Proses Import (POST)
          // Tambahkan ini juga agar form bisa disubmit
          Route::post('import', [TransactionController::class, 'import'])
               ->middleware(CekRole::class . ':1')
               ->name('transactions.import.submit');
          
           Route::get('export', [TransactionController::class, 'showExportForm'])
               ->middleware(CekRole::class . ':1,2')
               ->name('transactions.export.form');

          // 5. === BARU: Proses Generate PDF (POST) ===
          // Akses: Manajer (1) & Pemilik (2)
          Route::post('export', [TransactionController::class, 'exportPDF'])
               ->middleware(CekRole::class . ':1,2')
               ->name('transactions.export.submit');
     });

     // Route Lainnya...
     Route::get('loyalitas', [LoyalitasController::class, 'index'])
          ->middleware(CekRole::class . ':1,2,3')
          ->name('loyalitas.index');

     Route::get('trends', [TrendController::class, 'index'])
          ->middleware(CekRole::class . ':1,2,3')
          ->name('trends.index');
});
