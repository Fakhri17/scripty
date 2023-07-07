<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dosen\DashboardDosenController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\Mahasiswa\DashboardMhsController;
use App\Http\Controllers\Mahasiswa\JadwalMhsController;
use App\Http\Controllers\Mahasiswa\ListDosenMhsController;
use App\Http\Controllers\Mahasiswa\RevisiMhsController;
use App\Http\Controllers\Mahasiswa\SkripsiMhsController;
use App\Http\Controllers\SkripsiController;

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

// Route Landing Page
// Home
Route::get('/', function () {
    return view('index');
});


Route::get('/dosen', function () {
    return view('list_dosen');
});


Route::get('/detail_dosen', function () {
    return view('detail_dosen');
});




Route::middleware('guest')->group(function () {
    // Route Login
    Route::prefix('login')->middleware('guest')->group(function () {
        Route::get('/', [LoginController::class, 'index'])->name('login');
        Route::post('/', [LoginController::class, 'login']);
    });

    // Route Register
    Route::prefix('register')->group(function () {
        Route::get('/', [RegisterController::class, 'index']);
        Route::post('/', [RegisterController::class, 'register']);
    });
});



// Route Logout
Route::post('/logout', [LoginController::class, 'logout']);


// Route Mahasiswa
Route::middleware('roleMhs')->group(function () {
    Route::prefix('mhs')->group(function () {
        Route::get('/dashboard', [DashboardMhsController::class, 'index']);
        // Route::get('/list-dosen', [ListDosenMhsController::class, 'index']);
        Route::get('/detail-dosen/{id}/detail', [ListDosenController::class, 'show']);
        Route::get('/jadwal', [JadwalMhsController::class, 'index']);
        Route::post('/jadwal/store', [JadwalMhsController::class, 'store']);
        Route::get('/skripsi', [SkripsiMhsController::class, 'index']);
        Route::get('/revisi', [RevisiMhsController::class, 'index']);
    });
});

// Route Dosen
Route::middleware('roleDosen')->group(function () {
    Route::prefix('dosen')->group(function () {
        Route::get('/dashboard', [DashboardDosenController::class, 'index']);
    });
});



// Route Error 404 Not Found
Route::get('/error', [ErrorController::class, 'error']);
