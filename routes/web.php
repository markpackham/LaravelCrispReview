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
Route::get('/brands', [BrandController::class, 'index'])->name('brands');

Route::get('/brands/create', [BrandController::class, 'create'])->name('brands-create');

// Companies
Route::get('/companies', [CompanyController::class, 'index'])->name('companies');

Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies-create');

// Crisps
Route::get('/crisps', [CrispController::class, 'index'])->name('crisps');

Route::get('/crisps/create', [CrispController::class, 'create'])->name('crisps-create');

// Flavours
Route::get('/flavours', [FlavourController::class, 'index'])->name('flavours');

Route::get('/flavours/create', [FlavourController::class, 'create'])->name('flavours-create');


// Potatoes
Route::get('/potatoes', [PotatoController::class, 'index'])->name('potatoes');

Route::get('/potatoes/create', [PotatoController::class, 'create'])->name('potatoes-create');
