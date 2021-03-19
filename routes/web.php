<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[pageController::class,'i']);
Route::get('/sign_in',[pageController::class,'sign_in']);
Route::get('/sign_up',[pageController::class,'sign_up']);
Route::post('/signuppe',[pageController::class,'signupp']);
Route::post('/signinn',[pageController::class,'signinn']);
Route::get('/new_project',[pageController::class,'newproject']);
Route::post('/new',[pageController::class,'AddProject']);
Route::get('/info',[pageController::class,'projectInfo']);