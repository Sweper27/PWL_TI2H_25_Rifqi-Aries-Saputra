<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
   return 'Hello World';
});

Route::get('/world', function () {
   return 'Wold';
});

Route::get('/about', function () {
   return 'Rifqi Aries Saputra 244107020175';
});

Route::get('/user/{name?}', function ($name = 'john') {
    return 'Nama saya ' . $name;
});

Route::get('/user/profile', function () {
    //
})->name('profile');

// Generating URLs...
$url = route('profile');

// Generating Redirects...
return redirect()->route('profile');

Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });

Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});

Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});

