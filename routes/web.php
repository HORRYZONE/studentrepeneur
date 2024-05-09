<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Registration2Controller;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/donation-display', function () {
    return view('donation-display');
});


Route::get('/registration-2', function () {
    return view('registration-2');
})->name('registration-2');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/registration-form', [RegistrationController::class, 'RegistrationForm'])->name('registration-form');
Route::post('/registration2-form', [Registration2Controller::class, 'registration2Form'])->name('registration2-form');