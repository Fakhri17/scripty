<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Mahasiswa\DashboardMhsController;
use App\Http\Controllers\Mahasiswa\JadwalMhsController;
use App\Http\Controllers\Mahasiswa\ListDosenMhsController;

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




// Route Login
Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'index']);
    Route::post('/', [LoginController::class, 'login']);
});

// Route Register
Route::prefix('register')->group(function () {
    Route::get('/', [RegisterController::class, 'index']);
    Route::post('/', [RegisterController::class, 'register']);
});


// Route Mahasiswa
Route::prefix('mhs')->group(function () {
    Route::get('/dashboard', [DashboardMhsController::class, 'index']);
    Route::get('/list-dosen', [ListDosenMhsController::class, 'index']);
    Route::get('/detail-dosen/{id}/detail', [ListDosenController::class, 'show']);
    Route::get('/jadwal', [JadwalMhsController::class, 'index']);
    Route::post('/jadwal/store', [JadwalMhsController::class, 'store']);
});




// Route Dosen
Route::prefix('dosen')->group(function () {
    // Route dashboard menu
    Route::prefix('dashboard')->group(function () {
        Route::get('/', function () {
            return view('dashboard');
        });
    });
});
