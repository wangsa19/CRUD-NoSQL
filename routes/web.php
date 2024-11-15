<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UsersController::class, 'index'])->name('users');
Route::post('/store', [UsersController::class, 'store'])->name('usersStore');
Route::post('/update/{id}', [UsersController::class, 'update'])->name('usersUpdate');
Route::delete('/delete/{id}', [UsersController::class, 'destroy'])->name('usersDelete');
