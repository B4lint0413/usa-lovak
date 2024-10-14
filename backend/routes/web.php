<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HorseController;

Route::get("/", [HorseController::class, "index"])->name("home");
Route::get("/horse/list", [HorseController::class, "list"])->name("horse.list");
Route::get("/horse/table", [HorseController::class, "table"])->name("horse.table");
Route::get("/horse/grid", [HorseController::class, "grid"])->name("horse.grid");