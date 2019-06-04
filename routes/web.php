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

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});

Route::resource('/actors','ActorController');
Route::resource('/movies','MovieController');

Route::get('/genres/{id}','GenreController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

// Image upload
Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');


Route::get('/admin', function(){
   
    return view('/admin/dashboard');

})->name('admin_dashboard')->middleware(['auth', 'admin']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
