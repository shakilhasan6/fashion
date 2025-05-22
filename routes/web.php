<?php

use App\Http\Controllers\Frontend\welcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome'); 
// });
Route::get('/',[welcomeController::class,"index"]);
