<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


//rotas protegidas por autenticacao, 
//so deixa o usuario acessar se estiver logado

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/', 'Admin\AdminController@index');
    Route::resource('usuarios', 'Admin\UsuarioController');

   Route::get('usuarios/papel/{id}', 'Admin\UsuarioController@papel');
   Route::post('usuarios/papel/{papel}', 'Admin\UsuarioController@papelStore');
   Route::delete('usuarios/papel/{usuario}/{papel}', 'Admin\UsuarioController@papelDestroy');

   Route::resource('papeis', 'Admin\PapelController');

});
