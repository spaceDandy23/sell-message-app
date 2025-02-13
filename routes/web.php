<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
    return view('sample-page');
});


Route::get('/messages', [MessageController::class, 'index'])
    ->name('messages.index');
Route::get('messages/create', [MessageController::class, 'create'])
    ->name('messages.create');
Route::post('messages/store', [MessageController::class, 'store'])
    ->name('messages.store');