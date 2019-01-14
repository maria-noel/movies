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
});


Route::resource('/actors','ActorController', ['only' => ['index', 'show']]);
Route::resource('/movies','MovieController', ['only' => ['index', 'show']]);

Route::get('/genres/{id}','GenreController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');


Route::get('/admin', function(){
   
    return view('/admin/dashboard');

})->name('admin_dashboard')->middleware(['auth', 'admin']);
