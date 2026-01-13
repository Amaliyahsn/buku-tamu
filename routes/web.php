<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [GuestController::class, 'index']);
Route::post('/simpan', [GuestController::class, 'store']);
Route::get('/admin', [GuestController::class, 'admin']);

