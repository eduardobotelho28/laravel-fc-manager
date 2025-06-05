<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PlayerController;
use App\Http\Middleware\CheckIsLogged;
use App\Http\Middleware\CheckIsNotLogged;
use Illuminate\Support\Facades\Route;

//auth routes
Route::middleware([CheckIsNotLogged::class])->group(function () {
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);
});

//logged routes
Route::middleware([CheckIsLogged::class])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/', [MainController::class, 'index']);

    Route::get('/players', [PlayerController::class, 'players']);
    Route::get('/createPlayer', [PlayerController::class, 'createPlayer']);
    Route::post('/createPlayerSubmit', [PlayerController::class, 'createPlayerSubmit']);
    Route::get('/editPlayer/{id}', [PlayerController::class, 'editPlayer']);
    Route::get('/deletePlayer/{id}', [PlayerController::class, 'deletePlayer']);
});

