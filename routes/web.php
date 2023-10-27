<?php

use App\Http\Controllers\TareaController;
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


Route::resource('tareas', TareaController::class);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [TareaController::class, 'index'])->name('home');

