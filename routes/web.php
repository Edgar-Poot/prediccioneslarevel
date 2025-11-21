<?php

use App\Http\Controllers\AnalisisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LecturasPhController;
use App\Http\Controllers\LecturasCeController;
use App\Http\Controllers\LecturasTurbidezController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ph', [LecturasPhController::class, 'index']);
Route::get('/ce', [LecturasCeController::class, 'index']);
Route::get('/turbidez', [LecturasTurbidezController::class, 'index']);

Route::get('/analisis/correlaciones', [AnalisisController::class, 'correlaciones']);
