<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminCheckMiddleware;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

//USER RUTE
Route::middleware('auth')->group(function () {

});


//ADMIN RUTE
Route::middleware(['auth', AdminCheckMiddleware::class])->prefix('/admin')->group(function () {

    Route::view('/', 'admin.welcome')->name('admin.home');

    Route::controller(AdminProductController::class)->prefix('/product')->name('product.')->group(function () {

        Route::get('/create', 'create')->name('create');

        Route::post('/save', 'save')->name('save');

    });

    Route::view('/category/crate', 'admin.categories.create')->name('category.create');
    Route::post('/category/save', [AdminCategoryController::class, 'save'])->name('category.save');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
