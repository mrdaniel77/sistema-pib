<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\MembrosController;

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


Route::get('/', [DashboardController::class, 'index']);

Route::get('/membro', [MembrosController::class, 'index']);
Route::get('/membro/novo', [MembrosController::class, 'create']);
Route::get('/membro/editar/{id}',[MembrosController::class, 'update']);
Route::post('/membro/salvar',[MembrosController::class, 'store']);
Route::get('/membro/deletar', [MembrosController::class, 'delete']);



