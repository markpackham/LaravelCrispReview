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

Route::post('/brands', [BrandController::class, 'store']);


// Companies
Route::get('/companies', [CompanyController::class, 'index'])->name('companies');

Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies-create');

Route::post('/companies', [CompanyController::class, 'store']);


// Crisps
Route::get('/crisps', [CrispController::class, 'index'])->name('crisps');

Route::get('/crisps/create', [CrispController::class, 'create'])->name('crisps-create');

Route::post('/crisps', [CrispController::class, 'store']);


// Flavours
Route::get('/flavours', [FlavourController::class, 'index'])->name('flavours');

Route::get('/flavours/create', [FlavourController::class, 'create'])->name('flavours-create');

Route::post('/flavours', [FlavourController::class, 'store']);

Route::get('/flavours/{flavour}/edit', [FlavourController::class, 'edit'])->name('flavours-edit');

Route::put('/flavours/{flavour}', [FlavourController::class, 'update']);

Route::delete('/flavours/{flavour}', [FlavourController::class, 'destroy']);

Route::get('/flavours/{flavour}', [FlavourController::class, 'show'])->name('flavours-show');


// Potatoes

Route::get('/potatoes', [PotatoController::class, 'index'])->name('potatoes');

Route::get('/potatoes/create', [PotatoController::class, 'create'])->name('potatoes-create');

Route::post('/potatoes', [PotatoController::class, 'store']);

Route::get('/potatoes/{potato}/edit', [PotatoController::class, 'edit'])->name('potatoes-edit');

Route::put('/potatoes/{potato}', [PotatoController::class, 'update']);

Route::delete('/potatoes/{potato}', [PotatoController::class, 'destroy']);

// Always put SHOW at the end
Route::get('/potatoes/{potato}', [PotatoController::class, 'show'])->name('potatoes-show');
