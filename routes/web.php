<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CrispController;
use App\Http\Controllers\FlavourController;
use App\Http\Controllers\PotatoController;
use App\Http\Controllers\UserController;

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

// Home Page is the About Page
Route::controller(AboutController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});


// Brands
Route::controller(BrandController::class)->group(function () {
    Route::get('/brands', 'index')->name('brands');

    Route::get('/brands/create', 'create')->name('brands-create')->middleware('auth');

    Route::post('/brands', 'store')->middleware('auth');

    Route::get('/brands/{brand}/edit', 'edit')->name('brands-edit')->middleware('auth');

    Route::put('/brands/{brand}', 'update')->middleware('auth');

    Route::delete('/brands/{brand}', 'destroy')->middleware('auth');

    Route::get('/brands/{brand}', 'show')->name('brands-show');
});

// Companies
Route::controller(CompanyController::class)->group(function () {
    Route::get('/companies', 'index')->name('companies');

    Route::get('/companies/create', 'create')->name('companies-create')->middleware('auth');

    Route::post('/companies', 'store')->middleware('auth');

    Route::get('/companies/{company}/edit', 'edit')->name('companies-edit')->middleware('auth');

    Route::put('/companies/{company}', 'update')->middleware('auth');

    Route::delete('/companies/{company}', 'destroy')->middleware('auth');

    Route::get('/companies/{company}', 'show')->name('companies-show');
});

// Crisps
Route::controller(CrispController::class)->group(function () {
    Route::get('/crisps', 'index')->name('crisps');

    Route::get('/crisps/create', 'create')->name('crisps-create')->middleware('auth');

    Route::post('/crisps', 'store')->middleware('auth');

    Route::get('/crisps/{crisp}/edit', 'edit')->name('crisps-edit');

    Route::put('/crisps/{crisp}', 'update')->middleware('auth');

    Route::delete('/crisps/{crisp}', 'destroy')->middleware('auth');

    Route::get('/crisps/{crisp}', 'show')->name('crisps-show');
});


// Flavours
Route::get('/flavours', [FlavourController::class, 'index'])->name('flavours');

Route::get('/flavours/orderedASC', [FlavourController::class, 'orderedASC'])->name('flavours-orderedASC');

Route::get('/flavours/orderedDESC', [FlavourController::class, 'orderedDESC'])->name('flavours-orderedDESC');

Route::get('/flavours/create', [FlavourController::class, 'create'])->name('flavours-create')->middleware('auth');

Route::post('/flavours', [FlavourController::class, 'store'])->middleware('auth');

Route::get('/flavours/{flavour}/edit', [FlavourController::class, 'edit'])->name('flavours-edit')->middleware('auth');

Route::put('/flavours/{flavour}', [FlavourController::class, 'update'])->middleware('auth');

Route::delete('/flavours/{flavour}', [FlavourController::class, 'destroy'])->middleware('auth');

Route::get('/flavours/{flavour}', [FlavourController::class, 'show'])->name('flavours-show');


// Potatoes

Route::get('/potatoes', [PotatoController::class, 'index'])->name('potatoes');

Route::get('/potatoes/create', [PotatoController::class, 'create'])->name('potatoes-create')->middleware('auth');

Route::post('/potatoes', [PotatoController::class, 'store'])->middleware('auth');

Route::get('/potatoes/{potato}/edit', [PotatoController::class, 'edit'])->name('potatoes-edit')->middleware('auth');

Route::put('/potatoes/{potato}', [PotatoController::class, 'update'])->middleware('auth');

Route::delete('/potatoes/{potato}', [PotatoController::class, 'destroy'])->middleware('auth');

// Always put SHOW at the end
Route::get('/potatoes/{potato}', [PotatoController::class, 'show'])->name('potatoes-show');

// Users
Route::get('/register', [UserController::class, 'create'])->name('users-create');

Route::get('/login', [UserController::class, 'login'])->name('users-login')->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);
