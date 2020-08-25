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


Route::get('admin/home', 'Admin\Home@index')->name('home.dashboard');
Route::get('admin/home', 'Admin\Create@index')->name('home.create');
Route::get('admin/cadastra', 'Admin\CadastraAposta@index')->name('cadastraaposta.cadastra');

Route::get('admin/cadastra/create', 'Admin\CadastraAposta@create')->name('cadastraaposta.create');

Route::get('admin/apostas', 'Admin\ApostasCadastradas@index')->name('apostacadastrada.aposta');
Route::get('admin/pontos', 'Admin\Pontos@index')->name('pontos.total');


/*
*  Authentication
*/
Auth::routes();