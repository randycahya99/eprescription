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

// Dashboard
Route::get('/dashboard', 'DashboardController@Dashboard');

// Master Data Obat & Alkes
Route::get('/obat', 'ObatController@Obat');

// Master Data Signa
Route::get('/signa', 'ObatController@Signa');

// Manajemen Data Resep Obat Racik
Route::get('/resep-racik', 'ObatController@ResepRacikan');

// Manajemen Data Resep Obat Non-Racik
Route::get('/resep-non-racik', 'ObatController@ResepNonRacikan');
