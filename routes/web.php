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
// *************************************************************
// ************************************************************
// Route::get('/', function () {
//     return view('welcome');
//  });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('welcome');

// *************************************************************
// ************************************************************



// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/show', 'HomeController@index')->name('show');



// Route::view('/test', 'datepicker');
// Route::view('/addrow', 'addrow');
//Route::view('/main', 'main');

// Route::view('register','bpproper.register')->name('register.bpproper.register');
// Route::get('show', 'HomeController@index')->name('show.bpproper.show');



// Route::get('/test', function(){
//     return View::make('datepicker');
// });


// Route::get('/register', function(){
//     return View::make('register');
// });


//****************************************** */
// Route::get('/', function () {
//     return view('bpproper/main');
// });


// ***start***
Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/main', function () {
    return view('bpproper/main');
});


Route::get('/register', function () {
    return view('bpproper/register');
})->name('register.bpproper.register');

Route::post('submit','MainController@store');

Route::get('/show', 'HomeController@index')->name('show');


Route::get('/test', function(){
    return View::make('datepicker');
});

