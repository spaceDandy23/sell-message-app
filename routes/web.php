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
Route::get('messages/{message}', [MessageController::class, 'show']) // display view for showing
    ->name('messages.show');
Route::get('messages/{message}/edit', [MessageController::class, 'edit']) // diplay view for edit
    ->name('messages.edit');
Route::patch('messages/{message}', [MessageController::class, 'update']) // for updating use patch
    ->name('messages.update');
Route::delete('messages/{message}', [MessageController::class, 'destroy'])
    ->name('messages.destroy');