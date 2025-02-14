<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
    return view('sample-page');
});

//prefix for path name
//name for name function
//group to group
Route::controller(MessageController::class)
    ->prefix('messages')
    ->name('messages.')
    ->group(function() {
        Route::get('/','index')
        ->name('index');
        Route::get('/create','create')
            ->name('create');
        Route::post('/store','store')
            ->name('store');
        Route::get('/{message}','show') // display view for showing
            ->name('show');
        Route::get('/{message}/edit','edit') // diplay view for edit
            ->name('edit');
        Route::patch('/{message}','update') // for updating use patch
            ->name('update');
        Route::delete('/{message}','destroy')
            ->name('destroy');
    });
