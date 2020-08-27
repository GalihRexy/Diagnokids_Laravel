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

// Auth
Route::get('/', 'AuthController@index')->name('login');
Route::get('auth', 'AuthController@index');
Route::get('auth/register', 'AuthController@register')->name('register');
Route::post('auth/proses_register', 'AuthController@proses_register');
Route::post('auth/proses_login', 'AuthController@proses_login');
Route::get('auth/logout', 'AuthController@logout')->name('logout');

// Home
Route::get('home', 'HomeController@index')->name('home');

// Profile
Route::get('profile', 'ProfileController@index')->name('profile');
Route::post('profile/tambah_data_anak', 'ProfileController@tambah_data_anak')->name('tambah_anak');

// Diagnosa
Route::get('diagnosa', 'DiagnosaController@index')->name('diagnosa');
Route::get('diagnosa/{id}', 'DiagnosaController@diagnosa_keluhan');
Route::post('diagnosa/gejala', 'DiagnosaController@diagnosa_gejala')->name('diagnosa_gejala');
Route::post('diagnosa/proses', 'DiagnosaController@diagnosa_proses')->name('diagnosa_proses');

// Data Diagnosa
Route::get('data-diagnosa', 'DataDiagnosaController@index')->name('data-diagnosa');
Route::get('data-diagnosa/detail/{id}', 'DataDiagnosaController@detail');