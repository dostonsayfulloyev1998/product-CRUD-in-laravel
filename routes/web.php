<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;


//student
Route::get('/',[StudentController::class,'index']);
Route::get('/create',[StudentController::class,'create'])->name('create.student');
Route::post('/store',[StudentController::class,'store'])->name('store.student');
Route::get('delete/{id}',[StudentController::class,'destroy']);
Route::get('edit/{id}',[StudentController::class,'edit']);
Route::post('/update',[StudentController::class,'update'])->name('update.student');



////product
  Route::get('/product',[ProductController::class,'index']);
  Route::get('/create-product',[ProductController::class,'create'])->name('create.product');
  Route::post('/store-product',[ProductController::class,'store'])->name("store.product");
  Route::put('/edit-product',[ProductController::class,'edit'])->name('edit.product');
  Route::put("/update-product",[ProductController::class,'update'])->name('update.product');
  Route::delete('/delete-product',[ProductController::class,'destroy'])->name('delete.product');

