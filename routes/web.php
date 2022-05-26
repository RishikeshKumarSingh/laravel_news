<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,"index"] ) ->name("homepage");
Route::get('/view',[HomeController::class,"view"] ) ->name("view");
Route::get('/insert',[HomeController::class,"create"] )->name("insert");

