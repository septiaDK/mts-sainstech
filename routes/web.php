<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\IdentitasWebController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\ProgramUnggulanController;
use App\Http\Controllers\TenagaPendidikController;

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
Route::post('store_daftar', [LandingController::class, 'store_daftar'])->name('landing.store_siswa_baru');
Route::get('success_daftar_siswa', [LandingController::class, 'success_daftar_siswa'])->name('landing.success_daftar_siswa');
Route::resource('/', LandingController::class);


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth:sanctum', 'verified']],
function(){
    // admin dashboard
    Route::resource('dashboard', AdminController::class);
    // visi misi
    Route::resource('visi_misi', VisiMisiController::class);
    // kurikulum
    Route::resource('kurikulum', KurikulumController::class);
    // identitas web
    Route::resource('identitas_web', IdentitasWebController::class);
    // siswa
    Route::resource('siswa', SiswaController::class);
    // tenaga pendidik
    Route::resource('tenaga_pendidik', TenagaPendidikController::class);
    // prestasi
    Route::resource('prestasi', PrestasiController::class);
    // program unggulan
    Route::resource('program_unggulan', ProgramUnggulanController::class);
});

Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
