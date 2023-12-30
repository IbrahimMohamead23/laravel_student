<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Reorderable;

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
    return redirect('books');
});

Route::get('home', function () {

    return redirect()->route('books.index');
});

Route::get('about', function () {

    return view('books.about');
});


Route::resource('students',StudentController::class);

Route::resource('books',BookController::class);

Route::resource('services',ServiceController::class);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
