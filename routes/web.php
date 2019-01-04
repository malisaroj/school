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

Route::get('index', 'School@index');

Route::get('principalsmessage', 'School@principalsmessage');

Route::get('faculty', 'School@faculty');

Route::get('gallery', 'School@gallery');

Route::get('contact', 'School@contact');




Route::get('login', 'Admin@login');

Route::post('login2', 'Admin@login2');

Route::get('addnews', 'Admin@addnews');

Route::post('addNew', 'Admin@addNew');

Route::get('maintainnews', 'Admin@maintainnews');

Route::get('deletes/{id}','Admin@delete');


//Route::get('maintainnews', 'Admin@maintainnews');

Route::get('addnotice', 'Admin@addnotice');

Route::post('addNotice', 'Admin@addNotice');