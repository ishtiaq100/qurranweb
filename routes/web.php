<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CurculmController;
use App\Http\Controllers\Admin\DashboardController;

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


Route::get('/',[FrontController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//for Admin
Route::prefix('admin')->middleware(['auth','adminauth'])->group(function(){

    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::get('/addcourse',[CourseController::class,'create']);
    Route::post('/course/save',[CourseController::class,'save']);
    Route::get('/allcourses',[CourseController::class,'index']);
    Route::get('/editcourse/{id}',[CourseController::class,'edit']);
    Route::put('/course/update/{id}',[CourseController::class,'update']);

    Route::get('/addcurrculum',[CurculmController::class,'create']);
    Route::post('/currculum/save',[CurculmController::class,'save']);
    Route::get('/allcurrculum',[CurculmController::class,'index']);
    Route::get('/editcurcum/{id}',[CurculmController::class,'edit']);
    Route::put('/currculum/update/{id}',[CurculmController::class,'update']);
    Route::get('/currculum/delete/{id}',[CurculmController::class,'delete']);


    Route::get('/addbook',[BookController::class,'create']);
    Route::get('/allbooks',[BookController::class,'index']);
    Route::post('/book/save',[BookController::class,'save']);
    Route::get('/editbook/{id}',[BookController::class,'edit']);
    Route::put('/book/update/{id}',[BookController::class,'update']);
    Route::get('/book/delete/{id}',[BookController::class,'delete']);





});
