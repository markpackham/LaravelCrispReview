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

// Home Page & About Page
Route::get('/', function () {
    return view('content.about');
});

// Brands
Route::get('/brands', function () {
    return view('brands.index');
});

// Companies
Route::get('/companies', function () {
    return view('companies.index');
});

// Crisps
Route::get('/crisps', function () {
    return view('crisps.index');
});

// Flavours
Route::get('/flavours', function () {
    return view('flavours.index');
});

// Potatoes
Route::get('/potatoes', function () {
    return view('potatoes.index');
});
