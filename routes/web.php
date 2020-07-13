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

Route::get('/home', 'HomeController@index')->name('home');
Route::group([
    'middleware'=>'auth',
],function(){
    Route::resource('tasks', 'TaskController',[
        'index' => 'tasks.index',
        'store' => 'tasks.store',
        'create' => 'tasks.create',
        'update' => 'tasks.update',
        'edit' => 'tasks.edit',
        'destroy' => 'tasks.destroy',
    ])->except('show');
});
