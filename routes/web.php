<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\RelationController;
use Illuminate\Support\Facades\Route;

// Welcome Page
Route::get('/', [WelcomeController::class, 'index']);

// Dashboard route (default Breeze route)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/reservasis/confirmation', function () {
    return view('reservasis.confirmation');
})->name('reservasis.confirmation');


// Profile routes (default Breeze routes)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// General Access Routes
Route::get('/hotels/{id}', [HotelController::class, 'showHotel'])->name('hotels.show');
Route::get('/kamars/{id}', [KamarController::class, 'showRoom'])->name('kamars.show');
Route::get('/reservasis/create', [ReservasiController::class, 'createGeneralReservation'])->name('reservasis.create');
Route::post('/reservasis', [ReservasiController::class, 'storeGeneralReservation'])->name('reservasis.store');


// Relation View
Route::get('/relations', [RelationController::class, 'index']);
Route::get('/relations/hotels', [RelationController::class, 'hotels']);
Route::get('/relations/kamars', [RelationController::class, 'kamars']);
Route::get('/relations/tamus', [RelationController::class, 'tamus']);
Route::get('/relations/reservasis', [RelationController::class, 'reservasis']);
Route::get('/relations/profiles', [RelationController::class, 'profiles']);

// Admin routes
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    // Hotels management routes
    Route::get('/admin/hotels', [HotelController::class, 'hotels'])->name('admin.hotels.index');
    Route::get('/admin/hotels/create', [HotelController::class, 'create'])->name('admin.hotels.create');
    Route::post('/admin/hotels', [HotelController::class, 'store'])->name('admin.hotels.store');
    Route::get('/admin/hotels/{hotel}', [HotelController::class, 'show'])->name('admin.hotels.show');
    Route::get('/admin/hotels/{hotel}/edit', [HotelController::class, 'edit'])->name('admin.hotels.edit');
    Route::put('/admin/hotels/{hotel}', [HotelController::class, 'update'])->name('admin.hotels.update');
    Route::delete('/admin/hotels/{hotel}', [HotelController::class, 'destroy'])->name('admin.hotels.destroy');

    // Kamars management routes
    Route::get('/admin/kamars', [KamarController::class, 'kamars'])->name('admin.kamars.index');
    Route::get('/admin/kamars/create', [KamarController::class, 'create'])->name('admin.kamars.create');
    Route::post('/admin/kamars', [KamarController::class, 'store'])->name('admin.kamars.store');
    Route::get('/admin/kamars/{kamar}', [KamarController::class, 'show'])->name('admin.kamars.show');
    Route::get('/admin/kamars/{kamar}/edit', [KamarController::class, 'edit'])->name('admin.kamars.edit');
    Route::put('/admin/kamars/{kamar}', [KamarController::class, 'update'])->name('admin.kamars.update');
    Route::delete('/admin/kamars/{kamar}', [KamarController::class, 'destroy'])->name('admin.kamars.destroy');

    // Tamus management routes
    Route::get('/admin/tamus', [TamuController::class, 'tamus'])->name('admin.tamus.index');
    Route::get('/admin/tamus/create', [TamuController::class, 'create'])->name('admin.tamus.create');
    Route::post('/admin/tamus', [TamuController::class, 'store'])->name('admin.tamus.store');
    Route::get('/admin/tamus/{tamu}', [TamuController::class, 'show'])->name('admin.tamus.show');
    Route::get('/admin/tamus/{tamu}/edit', [TamuController::class, 'edit'])->name('admin.tamus.edit');
    Route::put('/admin/tamus/{tamu}', [TamuController::class, 'update'])->name('admin.tamus.update');
    Route::delete('/admin/tamus/{tamu}', [TamuController::class, 'destroy'])->name('admin.tamus.destroy');

    // Reservasis management routes
    Route::get('/admin/reservasis', [ReservasiController::class, 'reservasis'])->name('admin.reservasis.index');
    Route::get('/admin/reservasis/create', [ReservasiController::class, 'create'])->name('admin.reservasis.create');
    Route::post('/admin/reservasis', [ReservasiController::class, 'store'])->name('admin.reservasis.store');
    Route::get('/admin/reservasis/{reservasi}', [ReservasiController::class, 'show'])->name('admin.reservasis.show');
    Route::get('/admin/reservasis/{reservasi}/edit', [ReservasiController::class, 'edit'])->name('admin.reservasis.edit');
    Route::put('/admin.reservasis/{reservasi}', [ReservasiController::class, 'update'])->name('admin.reservasis.update');
    Route::delete('/admin.reservasis/{reservasi}', [ReservasiController::class, 'destroy'])->name('admin.reservasis.destroy');

    // Profiles management routes
    Route::get('/admin/profiles', [ProfileController::class, 'profiles'])->name('admin.profiles.index');
    Route::get('/admin/profiles/create', [ProfileController::class, 'create'])->name('admin.profiles.create');
    Route::post('/admin/profiles', [ProfileController::class, 'store'])->name('admin.profiles.store');
    Route::get('/admin/profiles/{profile}', [ProfileController::class, 'show'])->name('admin.profiles.show');
    Route::get('/admin/profiles/{profile}/edit', [ProfileController::class, 'edit'])->name('admin.profiles.edit');
    Route::put('/admin/profiles/{profile}', [ProfileController::class, 'update'])->name('admin.profiles.update');
    Route::delete('/admin.profiles/{profile}', [ProfileController::class, 'destroy'])->name('admin.profiles.destroy');
});



// Include auth routes provided by Breeze or Laravel UI
require __DIR__.'/auth.php';
