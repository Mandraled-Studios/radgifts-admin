<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/under-maintenance', [PagesController::class, 'maintenance'])->name('maintenance');
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/corporate-gifting', [PagesController::class, 'corporateGifting'])->name('pages.corporate');
Route::get('/personal-gifting', [PagesController::class, 'personalGifting'])->name('pages.personal');
Route::get('/our-work', [PagesController::class, 'ourWorks'])->name('pages.works');
Route::get('/our-work/{work}', [PagesController::class, 'workDetails'])->name('pages.works.details');
Route::get('/about', [PagesController::class, 'about'])->name('pages.about');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('pages.contact');
Route::get('/contact-us/faq', [PagesController::class, 'faq'])->name('pages.contact.faq');
Route::post('/contact-us/mail', [PagesController::class, 'mail'])->name('contact.mail');
Route::post('/newsletter', [PagesController::class, 'newsletter'])->name('newsletter');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});