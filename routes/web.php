<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
///praktikum 1 no 1

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

///praktikum 1 no 2
Route::prefix('product')->group(function () {

    Route::get('/', [App\Http\Controllers\ProductController::class, 'product'] );
});

Route::prefix('product')->group(function () {

    Route::get('/{id}', [App\Http\Controllers\ProductController::class, 'products'] );
});

///praktikum 1 no 3
Route::get('/news/{name?}', function ($name = null) {
    if($name){
        return view('news',['name' => $name]);
    }else{
        return view('home-news');
    }
   });

   // /////Praktikum 1 no 4
Route::prefix('program')->group(function () {

    Route::get('/', [App\Http\Controllers\ListProgramController::class, 'list'] );
});

Route::prefix('program')->group(function () {

    Route::get('/{id}', [App\Http\Controllers\ListProgramController::class, 'list'] );
});


// /////Praktikum 1 no 5

Route::get('/aboutus', function(){
    return view('about-us');
});



// /////Praktikum 1 no 6

Route::resource('contactus', App\Http\Controllers\ContactUsController::class);
