<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;


Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', function () {
   return 'Wold';
});


//percobaan 2

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/about', [WelcomeController::class, 'about']);
Route::get('/articles/{id}', [WelcomeController::class, 'articles']);


//percobaan 3

//Route::get('/greeting', function () {
	//return view('blog.hello', ['name' => 'Rifqi Aries']);
//});

Route::get('/greeting', [WelcomeController::class, 'greeting']);


