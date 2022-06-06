<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CrispController;
use App\Http\Controllers\FlavourController;
use App\Http\Controllers\PotatoController;

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
Route::get('/brands', [BrandController::class, 'index']);

// Companies
Route::get('/companies', [CompanyController::class, 'index']);

// Crisps
Route::get('/crisps', [CrispController::class, 'index']);

// Flavours
Route::get('/flavours', [FlavourController::class, 'index']);

// Potatoes
Route::get('/potatoes', [PotatoController::class, 'index']);
