<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ProductController::class, "index"])->middleware(['auth', 'verified'])->name('products.dashboard');

// Route::get("products/", [ProductController::class, "index"])->name("products.index");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("products/create", [ProductController::class, "create"])->name("products.create");
Route::post("/products", [ProductController::class, "store"])->name("products.store");
Route::get("products/{product}", [ProductController::class, "show"])->name("products.product");

Route::get("products/{product}/edit", [ProductController::class, "edit"])->name("products.edit");
Route::put("products/{product}", [ProductController::class, "update"])->name("products.update");
Route::delete("products/{product}", [ProductController::class, "destroy"])->name("products.destroy");

require __DIR__.'/auth.php';
