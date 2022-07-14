<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/requerimento', [App\Http\Controllers\SetorPessoalController::class, 'requerimento'])->name('forms-requerimento');

Route::get('/aviso_ferias', [App\Http\Controllers\SetorPessoalController::class, 'aviso_ferias'])->name('forms-aviso_ferias');
