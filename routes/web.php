<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);
Route::post('/makeReservation', [\App\Http\Controllers\MainController::class, 'makeReservation']);


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin_dashboard');
    Route::get('/reservations', [\App\Http\Controllers\AdminController::class, 'reservations'])->name('admin_reservations');

    Route::post('/getReservations', [\App\Http\Controllers\AdminController::class, 'getReservations']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
