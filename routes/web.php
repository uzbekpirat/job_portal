<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ PostController::class,'index'])->name('index');
Route::get('/about',[PostController::class,'about'])->name('about');
Route::get('/job/detalis',[PostController::class,'job_detalis'])->name('job.details');
Route::get('/contact',[PostController::class,'contact'])->name('contact');
Route::get('/job/listing',[PostController::class,'job_listing'])->name('job.listings');
