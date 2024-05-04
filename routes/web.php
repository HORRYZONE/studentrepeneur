<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('registration');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/registration', 'RegistrationController@store')->name('registration.store');


Route::get('/registration-2', function () {
    return view('registration-2');
})->name('registration-2');