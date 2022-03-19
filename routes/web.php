<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\KurikulumController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('visi_misi', [LandingController::class, 'visi_misi'])->name('landing.visi_misi');
Route::get('kurikulum', [LandingController::class, 'kurikulum'])->name('landing.kurikulum');
Route::get('prestasi', [LandingController::class, 'prestasi'])->name('landing.prestasi');
Route::get('ekstrakurikuler', [LandingController::class, 'ekstrakurikuler'])->name('landing.ekstrakurikuler');
Route::get('organisasi', [LandingController::class, 'organisasi'])->name('landing.organisasi');
Route::get('daftar', [LandingController::class, 'daftar'])->name('landing.daftar');
Route::post('store_daftar', [LandingController::class, 'store_daftar'])->name('landing.store_daftar');
Route::resource('/', LandingController::class);


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth:sanctum', 'verified']],
function(){
    // admin dashboard
    Route::resource('dashboard', AdminController::class);
    // visi misi
    Route::resource('visi_misi', VisiMisiController::class);
    // kurikulum
    Route::resource('kurikulum', KurikulumController::class);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
