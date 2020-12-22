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

// DB::listen(function($query){
//     echo "<pre>{$query->sql}</pre>";
// });

Route::get('job', function(){
    dispatch(new App\Jobs\CreateProject);

    return "Listo!";
});


Route::get('roles', function(){
    return \App\Role::with('user')->get();
});

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::resource('portfolio', 'ProjectController')
    ->names('projects')
    ->parameters(['portfolio'=>'project']);

Route::view('/contact','contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store'); 

Route::resource('users', 'UserController');
// Auth::routes(['register' => false]);
Auth::routes();