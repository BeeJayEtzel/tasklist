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
    return view('index');
});

Route::get('/home', 'HomeController@show')->name('home');
Route::get('/home/tasks/{project}', 'TaskController@get');
Route::get('/home/subtasks/{task}', 'SubtaskController@get');
Route::get('/home/notes/{task}', 'NoteController@get');

Route::post('/task/create', 'TaskController@create');
Route::post('/subtask/create', 'SubtaskController@create');
Route::post('/note/create', 'NoteController@create');
Route::post('/project/create', 'ProjectController@create');

Route::post('/task/complete/{task}', 'TaskController@complete');

Route::get('/register', 'RegistrationController@show');
Route::post('/register', 'RegistrationController@create');

Route::get('/login', 'SessionsController@show');
Route::post('/login', 'SessionsController@login');
Route::post('/logout', 'SessionsController@logout');
