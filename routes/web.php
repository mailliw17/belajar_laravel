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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'William huhu';
//     return view('about', ['nama' => $nama]);
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/mahasiswa', 'MahasiswaController@index');

// Students (urutkan berdasarkan php artisan route:list)
Route::get('/students', 'StudentController@index');
Route::post('/students', 'StudentController@store');
Route::get('/students/create', 'StudentController@create');
Route::get('/students/{student}', 'StudentController@show');
Route::delete('/students/{student}', 'StudentController@destroy');
Route::patch('/students/{student}', 'StudentController@update');
Route::get('/students/{student}/edit', 'StudentController@edit');
