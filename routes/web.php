<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Categories
Route::group(['namespace' => 'App\Http\Controllers\Category'], function() {
    Route::get('/', 'IndexController')->name('category.index');
    Route::get('/categories/create', 'CreateController')->name('category.create');
    Route::get('/categories/{category}', 'ShowController')->name('category.show');
    Route::get('/categories/{category}/subcategories/{subcategory}', 'ShowController')->name('subcategory.index');
    Route::get('/categories/{category}/edit', 'EditController')->name('category.edit');
    Route::post('/categories', 'StoreController')->name('category.store');
    Route::patch('/categories/{category}', 'UpdateController')->name('category.update');
    Route::delete('/categories/{category}', 'DestroyController')->name('category.delete');
});

// Advertisements
Route::group(['namespace' => 'App\Http\Controllers\Advertisement'], function() {
    Route::get('/categories/{category}/subcategories/{subcategory}/ads', 'IndexController')->name('advertisement.index');
    Route::get('/categories/{category}/subcategories/{subcategory}/ads/{ad}', 'ShowController')->name('advertisement.show');
    Route::get('/categories/{category}/subcategories/{subcategory}/{_subcategory?}/ads', 'IndexController')->name('_advertisement.index');
    Route::get('/categories/{category}/subcategories/{subcategory}/{_subcategory?}/ads/{ad}', 'ShowController')->name('_advertisement.show');

    Route::middleware('auth')->group(function () {
        Route::get('/new', 'CreateController')->name('advertisement.create');
        Route::post('/new', 'StoreController')->name('advertisement.store');
    });
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
