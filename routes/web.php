<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/compra/create/{plano}', 'App\Http\Controllers\CompraController@create')->middleware('auth')->name('compra.create');
Route::post('/compra/create/{plano}', 'App\Http\Controllers\CompraController@store')->middleware('auth')->name('compra.store');
Route::get('/compra/pagamento/{plano}', 'App\Http\Controllers\PagamentoController@create')->middleware('auth')->name('pagamento.index');
Route::delete('/compra/remover', 'App\Http\Controllers\CompraController@destroy')->middleware('auth')->name('compra.destroy');

Route::resource('perfil', '\App\Http\Controllers\UserControler');