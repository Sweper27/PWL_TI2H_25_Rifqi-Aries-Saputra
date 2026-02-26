<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;


Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', function () {
   return 'Wold';
});

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/about', [WelcomeController::class, 'about']);
Route::get('/articles/{id}', [WelcomeController::class, 'articles']);

