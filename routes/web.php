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
Route::get('/', [AboutController::class, 'index'])->name('home');

// Brands
Route::get('/brands', [BrandController::class, 'index'])->name('brands');

Route::get('/brands/create', [BrandController::class, 'create'])->name('brands-create')->middleware('auth');

Route::post('/brands', [BrandController::class, 'store'])->middleware('auth');

Route::get('/brands/{brand}/edit', [BrandController::class, 'edit'])->name('brands-edit')->middleware('auth');

Route::put('/brands/{brand}', [BrandController::class, 'update'])->middleware('auth');

Route::delete('/brands/{brand}', [BrandController::class, 'destroy'])->middleware('auth');

Route::get('/brands/{brand}', [BrandController::class, 'show'])->name('brands-show');


// Companies
Route::get('/companies', [CompanyController::class, 'index'])->name('companies');

Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies-create')->middleware('auth');

Route::post('/companies', [CompanyController::class, 'store'])->middleware('auth');

Route::get('/companies/{company}/edit', [CompanyController::class, 'edit'])->name('companies-edit')->middleware('auth');

Route::put('/companies/{company}', [CompanyController::class, 'update'])->middleware('auth');

Route::delete('/companies/{company}', [CompanyController::class, 'destroy'])->middleware('auth');

Route::get('/companies/{company}', [CompanyController::class, 'show'])->name('companies-show');


// Crisps
Route::get('/crisps', [CrispController::class, 'index'])->name('crisps');

Route::get('/crisps/create', [CrispController::class, 'create'])->name('crisps-create')->middleware('auth');

Route::post('/crisps', [CrispController::class, 'store'])->middleware('auth');

Route::get('/crisps/{crisp}/edit', [CrispController::class, 'edit'])->name('crisps-edit');

Route::put('/crisps/{crisp}', [CrispController::class, 'update'])->middleware('auth');

Route::delete('/crisps/{crisp}', [CrispController::class, 'destroy'])->middleware('auth');

Route::get('/crisps/{crisp}', [CrispController::class, 'show'])->name('crisps-show');


// Flavours
Route::get('/flavours', [FlavourController::class, 'index'])->name('flavours');

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
