<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BukuController;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard User (Siswa)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Dashboard Admin
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/admin/dashboard', function () {

        // Pastikan hanya admin yang bisa akses
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Unauthorized action.');
        }

        return view('admin.dashboard');

    })->name('admin.dashboard');

    // CRUD Buku
    Route::resource('/admin/buku', BukuController::class, ['as' => 'admin']);

});

// Route Profile bawaan Breeze
Route::get('/profile', [ProfileController::class, 'edit'])
    ->name('profile.edit');

Route::patch('/profile', [ProfileController::class, 'update'])
    ->name('profile.update');

Route::delete('/profile', [ProfileController::class, 'destroy'])
    ->name('profile.destroy');

require __DIR__.'/auth.php';