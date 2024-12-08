<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/home', function () {
    return redirect('/');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/tracer-study', function () {
    return view('tracerStudy');
});

Route::get('/career-class', function () {
    return view('career-class');
});

Route::get('/career-fair', function () {
    return view('career-fair');
});

Route::get('/company-talk', function () {
    return view('company-talk');
});

Route::post('/posts', [PostController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/kuesioner', function () {
    return view('kuesioner');
})->middleware(['auth'])->name('kuisioner');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
