<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SettlementController;

Route::get('/', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/item/create', [ItemController::class, 'create']);
Route::post('/item', [ItemController::class, 'store']);
Route::get('/settlement/show', [SettlementController::class, 'show']);
Route::get('/settlement/{month}', [SettlementController::class, 'display']);
Route::get('/settlement', [SettlementController::class, 'index']);