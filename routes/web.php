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

    Route::get('/crisps/{crisp}/edit', 'edit')->name('crisps-edit')->middleware('auth');

    Route::put('/crisps/{crisp}', 'update')->middleware('auth');

    Route::delete('/crisps/{crisp}', 'destroy')->middleware('auth');

    Route::get('/crisps/{crisp}', 'show')->name('crisps-show');
});


// Flavours
Route::controller(FlavourController::class)->group(
    function () {
        Route::get('/flavours', 'index')->name('flavours');

        Route::get('/flavours/orderedASC', 'orderedASC')->name('flavours-orderedASC');

        Route::get('/flavours/orderedDESC', 'orderedDESC')->name('flavours-orderedDESC');

        Route::get('/flavours/create', 'create')->name('flavours-create')->middleware('auth');

        Route::post('/flavours', 'store')->middleware('auth');

        Route::get('/flavours/{flavour}/edit', 'edit')->name('flavours-edit')->middleware('auth');

        Route::put('/flavours/{flavour}', 'update')->middleware('auth');

        Route::delete('/flavours/{flavour}', 'destroy')->middleware('auth');

        Route::get('/flavours/{flavour}', 'show')->name('flavours-show');
    }
);


// Potatoes
Route::controller(PotatoController::class)->group(
    function () {
        Route::get('/potatoes', 'index')->name('potatoes');

        Route::get('/potatoes/create', 'create')->name('potatoes-create')->middleware('auth');

        Route::post('/potatoes', 'store')->middleware('auth');

        Route::get('/potatoes/{potato}/edit', 'edit')->name('potatoes-edit')->middleware('auth');

        Route::put('/potatoes/{potato}', 'update')->middleware('auth');

        Route::delete('/potatoes/{potato}', 'destroy')->middleware('auth');

        Route::get('/potatoes/{potato}', 'show')->name('potatoes-show');
    }
);


// Users
Route::controller(UserController::class)->group(
    function () {
        Route::get('/register', 'create')->name('users-create')->middleware('guest');

        Route::get('/login', 'login')->name('users-login')->middleware('guest');

        Route::post('/users', 'store');

        Route::post('/logout', 'logout');

        Route::post('/users/authenticate', 'authenticate');
    }
);
