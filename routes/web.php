<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LineupController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TitleController;
use App\Http\Middleware\CheckIsLogged;
use App\Http\Middleware\CheckIsNotLogged;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Li;

//auth routes
Route::middleware([CheckIsNotLogged::class])->group(function () {
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);
});

//logged routes
Route::middleware([CheckIsLogged::class])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/', [MainController::class, 'index']);

    //player routes
    Route::get('/players', [PlayerController::class, 'players']);
    Route::get('/createPlayer', [PlayerController::class, 'createPlayer']);
    Route::post('/createPlayerSubmit', [PlayerController::class, 'createPlayerSubmit']);
    Route::get('/editPlayer/{id}', [PlayerController::class, 'editPlayer']);
    Route::get('/deletePlayer/{id}', [PlayerController::class, 'deletePlayer']);
    Route::get('/changePlayerStatus/{id}/{status}', [PlayerController::class, 'changePlayerStatus']);
    Route::post('/editPlayerSubmit/{id}', [PlayerController::class, 'editPlayerSubmit']);

    //match routes
    Route::get('/matches', [MatchController::class, 'matches']);
    Route::get('/createMatch', [MatchController::class, 'createMatch']);
    Route::post('/createMatchSubmit', [MatchController::class, 'createMatchSubmit']);
    Route::get('/deleteMatch/{id}', [MatchController::class, 'deleteMatch']);

    //lineup routes
    Route::get('/lineup/{match}', [LineupController::class, 'index']); 
    Route::post('/addPlayerToLineup/{match}', [LineupController::class, 'addPlayerToLineup']);
    Route::post('/deletePlayerLineup/{match}/{player}', [LineupController::class, 'deletePlayerLineup']);

    //title routes
    Route::get('/titles', [TitleController::class, 'titles']);

});

