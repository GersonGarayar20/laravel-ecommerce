<?php

use App\Http\Controllers\ClothingController;
use App\Http\Controllers\ClothingTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClothingController::class, "index"])->name("index");
Route::get('/clothing/create', [ClothingController::class, "create"])->name("clothing.create");
Route::get('/clothing/{id}', [ClothingController::class, "show"])->name("clothing.show");
Route::post('/clothing', [ClothingController::class, "store"])->name("clothing.store");

Route::get('/clothingTypes/create', [ClothingTypeController::class, 'create'])->name('clothingType.create');
Route::post('/clothingTypes', [ClothingTypeController::class, 'store'])->name('clothingType.store');

Route::get("/cart", function () {
  return view("cart.index");
})->name("cart");
