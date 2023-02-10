<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user;

// ********** Route For insert Data page *******************
Route::view('/insert','insert');
Route::post('/save',[user::class,'save']);

// *************Route For See Data in the database *******************
Route::get('list',[user::class,'view']);

// *************** Route  For Delete  Data ***************
Route::get('delete{id}',[user::class,'delete'] );

// *************** Route  of Update Data ***************
Route::get('update{id}',[user::class,'update']);
Route::post('/update',[user::class,'insert']);

