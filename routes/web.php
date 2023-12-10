<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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
});

//assignment day 2
Route::prefix('blog')->group(function(){
    Route::get('science', function(){
        return view('science');
    });

    Route::get('sports', function(){
        return view('sports');
    });

    Route::get('math', function(){
        return view('math');
    });

    Route::get('medical', function(){
        return view('medical');
    });
});

Route::get('about', function(){
    return view('about') ;
});

Route::get('contactus', function(){
    return view('contact');
});


// assignment day 3
Route::get('login', function(){
    return view('login');
});

Route::post('/display-form-data',[FormController::class, 'show'])->name('display.form.data');

// assignment day 4

Route::get('post', [PostController::class,'create']);
Route::post('storePost', [PostController::class, 'store'])->name('storePost');