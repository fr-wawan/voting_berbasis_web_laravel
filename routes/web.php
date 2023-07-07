<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemilihanController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\VotingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('guest')->group(function () {
  Route::get('/', [LoginController::class, 'index'])->name('login');
  Route::post('/auth', [LoginController::class, 'auth']);
});

Route::middleware('auth')->group(function () {
  Route::post('/logout', [LoginController::class, 'logout']);

  Route::get('/voting', [VotingController::class, 'index'])->name('voting.index');
  Route::get('/voting/{pemilihan}', [VotingController::class, 'show'])->name('voting.show');
  Route::post('/voting/{pemilihan}', [VotingController::class, 'vote'])->name('voting.vote');
});

Route::middleware(['auth', 'admin'])->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'index']);
  Route::get('/export/{pemilihan}', [DashboardController::class, 'export_pdf'])->name('dashboard.pdf');
  Route::resource('/pemilihan', PemilihanController::class);
  Route::resource('/kandidat', KandidatController::class);
  Route::resource('/pemilih', PemilihController::class);
});
