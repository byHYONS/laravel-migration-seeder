<?php

use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Guest\TrainsController;
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

// Route::get('/', function () {
//     return view('index');
// });

//? rotta per la home :
Route::get('/', [PageController::class, 'index'])->name('home');

//? rotta per la lista treni totale:
Route::get('/trains', [TrainsController::class, 'trains'])->name('trains');

//? rotta per la lista treni della giornata:
Route::get('/trains-today', [TrainsController::class, 'trainToDay'])->name(('trainsToDay'));

//? rotta per la lista treni della seguente:
Route::get('/trains-nextday', [TrainsController::class, 'trainNextDay'])->name(('trainsNextDay'));