<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/', [Controller::class, 'index'])
    ->name('index');
    Route::get('/inicio', [Controller::class, 'index'])
                ->name('inicio');
    Route::get('/dashboard', [Controller::class, 'index'])
                ->name('dashboard');
    Route::get('/processos', [Controller::class, 'processos'])
                ->name('processos');

});



require __DIR__.'/auth.php';
