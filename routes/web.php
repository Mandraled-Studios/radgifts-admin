<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/corporate-gifting', [PagesController::class, 'corporateGifting'])->name('pages.corporate');
Route::get('/personal-gifting', [PagesController::class, 'personalGifting'])->name('pages.personal');
Route::get('/our-works', [PagesController::class, 'ourWorks'])->name('pages.works');
Route::get('/our-works/{work}', [PagesController::class, 'workDetails'])->name('pages.works.details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/{static}', [PagesController::class, 'staticPage'])->name('pages.static');
