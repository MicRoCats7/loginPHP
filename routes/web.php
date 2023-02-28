<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Http\Controllers\BookController;
use App\Models\publisher;
use App\Http\Controllers\publisherController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home',[
        'books' => Book::paginate(5)
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::group(["prefix" => "/book"], function(){
    Route::get('/all', [BookController::class, 'index']);
    Route::get('/detail/{book:judul}', [BookController::class, 'show']);
    Route::get('/create', [BookController::class, 'create']);
    Route::post('/add', [BookController::class, 'store']);
    Route::delete('/delete/{book}', [BookController::class, 'destroy']);
    Route::get('/edit/{book}', [BookController::class, 'edit']);
    Route::post('/update/{book}', [BookController::class, 'update']);
});

Route::group(["prefix" => "/publisher"], function(){
    Route::get('/all', [publisherController::class, 'index']);
    Route::get('/detail/{publisher:nama}', [publisherController::class, 'show']);
});



Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'register_action'])->name('register.action');

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'login_action'])->name('login.action');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(["prefix"  => "/dashboard" ], function(){
    Route::get('/', function () {
        return view('dashboard.index');
    })->middleware('auth');

    Route::group(["prefix" => "/book"], function(){
        Route::get('/all', [DashboardController::class, 'index'])->middleware('auth');
        Route::get('detail/{book:Judul}', [DashboardController::class, 'show'])->middleware('auth');
        Route::get('/create', [DashboardController::class, 'create'])->middleware('auth');
        Route::post('/add', [DashboardController::class, 'store'])->middleware('auth');
        Route::delete('/delete/{book}', [DashboardController::class, 'destroy'])->middleware('auth');
        Route::get('/edit/{book}', [DashboardController::class, 'edit'])->middleware('auth');
        Route::post('/update/{book}', [DashboardController::class, 'update'])->middleware('auth');
    });
});

