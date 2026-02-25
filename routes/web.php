<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
    Route::resource('film', FilmController::class);

Route::get('/', function () {
    return view('welcome');
});
