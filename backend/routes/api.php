<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user', function (){
    return User::all();
});

Route::get('/users', [UserController::class, 'list']);
Route::post('/add', [UserController::class, 'add']);
Route::get('/edit/{users}', [UserController::class, 'edit']);
Route::put('/update/{users}', [UserController::class, 'update']);
Route::delete('/delete/{users}', [UserController::class, 'delete']);




