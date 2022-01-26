<?php

use App\Http\Controllers\MovimentacaoController;
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


Route::get('/', [MovimentacaoController::class, 'index'])->name('index');
Route::get('/criar', [MovimentacaoController::class, 'create'])->name('create');
Route::post('/criar', [MovimentacaoController::class, 'store'])->name('store');
Route::get('/editar/{id}', [MovimentacaoController::class, 'edit'])->name('edit');
Route::put('/editar/{id}', [MovimentacaoController::class, 'update'])->name('update');
Route::delete('/deletar/{id}', [MovimentacaoController::class, 'destroy'])->name('destroy');
