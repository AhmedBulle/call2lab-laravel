<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Models\Result;
use App\Http\Controllers\ContactController;
// Home + Public Pages
Route::get('/', fn () => view('home'))->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');

// Service Sub-pages
Route::get('/services/orders', fn () => view('services.orders'))->name('services.orders');
Route::get('/services/lab-tests', fn () => view('services.lab-tests'))->name('services.lab-tests');
Route::get('/services/medical-checkup', fn () => view('services.medical-checkup'))->name('services.medical-checkup');
Route::get('/tests/cbc', function () {
    return view('tests.cbc');
})->name('tests.cbc');

Route::get('/tests/liver', function () {
    return view('tests.liver');
})->name('tests.liver');

Route::get('/tests/covid', function () {
    return view('tests.covid');
})->name('tests.covid');
Route::view('/how-it-works', 'how-it-works')->name('how-it-works');

// how-it-works route
Route::get('/how-it-works/book-test', function () {
    return view('howitworks.book');
})->name('howitworks.book');

Route::get('/how-it-works/sample-collection', function () {
    return view('howitworks.sample');
})->name('howitworks.sample');

Route::get('/how-it-works/get-results', function () {
    return view('howitworks.results');
})->name('howitworks.results');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');



// 🧪 Booking a test (GET form)
Route::get('/book/{test}', function ($test) {
    return view('services.book', ['test' => $test]);
})->name('book.form'); // <-- form display route

// 📝 Submit booking (POST)
Route::post('/book/store', [BookingController::class, 'store'])->name('book.store');

// Dashboard (with results)
Route::get('/dashboard', function () {
    $results = Result::where('user_id', Auth::id())->latest()->get();
    return view('dashboard', compact('results'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/results', [ResultController::class, 'store'])->name('results.store');
});

// Auth scaffolding
require __DIR__.'/auth.php';
