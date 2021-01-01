<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;


Route::get('/',[Home::class,"homepage"]);
Route::post('/',[Home::class,"insert"])->name('insertpage');
Route::get('/delete/{id}',[Home::class,"delete"])->name('delete');
Route::get('/update/{id}',[Home::class,"update"])->name('update');