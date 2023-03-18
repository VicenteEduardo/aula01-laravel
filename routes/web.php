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

Route::get('/','SiteController@index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



//routas para admin

Route::get('/admin/painel', 'Admin\DashboradController@index')->name('admin');

//funcionarios
Route::get('/admin/usuarios','Admin\UserController@index')->name('user.index');
Route::get('/admin/usuarios/create','Admin\UserController@create')->name('user.create');
Route::post('/admin/usuarios/store','Admin\UserController@store')->name('user.store');

//end funcionarios

//prato do dia
Route::get('/admin/prato-dia','Admin\PratoDiaController@index')->name('pratodia.index');
Route::get('/admin/prato-dia/create','Admin\PratoDiaController@create')->name('pratodia.create');
Route::post('/admin/prato-dia/store','Admin\PratoDiaController@store')->name('pratodia.store');

require __DIR__ . '/auth.php';
