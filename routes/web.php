<?php

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
})->name('/');

Auth::routes();

Route::middleware(['auth','admin'])->prefix('admin')->group(function () {

    Route::get('/','Admin\DashboardController@index')->name('dashboard.index');

    Route::get('main',function (){
        return "hello";
    });

});

Route::get('/home', 'HomeController@index')->name('home');
