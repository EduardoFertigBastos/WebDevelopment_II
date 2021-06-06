<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ContasController;

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
    return redirect()->route('contas.index');
});
Route::get('/contas',                   [ContasController::class, 'index']) ->name('contas.index');
Route::get('/contas/create',            [ContasController::class, 'create'])->name('contas.create');
Route::get('/contas/{conta_id}/show',   [ContasController::class, 'show'])  ->name('contas.show');
Route::get('/contas/{conta_id}/edit',   [ContasController::class, 'edit'])  ->name('contas.edit');
Route::get('/contas/{conta_id}/delete', [ContasController::class, 'delete'])->name('contas.delete');

Route::post('/contas',                  [ContasController::class, 'store']) ->name('contas.store');
Route::post('/contas/{conta_id}/update',           [ContasController::class, 'update'])->name('contas.update');
