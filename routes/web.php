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

Route::get('/', 'WorkshopsController@home')->name('home');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login.post');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/admin', 'WorkshopsController@admin')->name('admin')->middleware('auth');

Route::get('/workshops/add', 'WorkshopsController@create')->name('workshops.create')->middleware('auth');
Route::post('/workshops/add', 'WorkshopsController@store')->name('workshops.store')->middleware('auth');

Route::get('/workshops/{id}/details', 'WorkshopsController@details')->name('workshops.details')->middleware('auth');

Route::get('/workshops/overview', 'WorkshopsController@overview')->name('workshops.overview')->middleware('auth');
Route::post('/workshops/overview', 'WorkshopsController@overview_filter')->name('workshops.overview')->middleware('auth');

Route::get('/workshops/{id}/details', 'WorkshopsController@details')->name('workshops.details')->middleware('auth');

Route::get('/workshops/{id}/edit', 'WorkshopsController@edit')->name('workshops.edit')->middleware('auth');
Route::post('/workshops/{id}/update', 'WorkshopsController@update')->name('workshops.update')->middleware('auth');

Route::get('/workshops/{id}/delete', 'WorkshopsController@delete')->name('workshops.delete')->middleware('auth');

Route::get('/workshop/{id}/register', 'WorkshopsController@workshop_register')->name('workshops.register');
Route::post('/workshop/{workshop_id}/register', 'WorkshopsController@workshop_register_confirm')->name('workshops.register.confirm');

Route::get('/participant/{id}/remove', 'WorkshopsController@remove_participant')->name('remove.participant')->middleware('auth');

Route::get('/workshop/confirmation', 'WorkshopsController@workshop_confirmation_message')->name('workshops.confirmation.message');




