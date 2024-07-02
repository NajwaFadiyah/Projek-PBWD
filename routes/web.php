<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\SessionController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('task', function () {
    return view('mytask');
});

Route::get('done', function () {
    return view('mydone');
});


Route::get('note', function () {
    return view('mynotes');
});

Route::get('/sesi', [SessionController::class, 'index'])->name('signin');
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/home', function () {
    return view('home');
})->middleware('auth'); // Menggunakan middleware auth untuk memastikan hanya pengguna yang sudah login yang bisa mengakses
Route::post('/sesi/logout', [SessionController::class, 'logout'])->name('logout');
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);

Route::get('/debug-env', function () {
    return response()->json(config('database.connections'));
  });
  
// Ensure the NoteController is correctly used for the /notes route
Route::get('/notes', [NoteController::class, 'index']);
  