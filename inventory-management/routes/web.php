<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
Route::get('/', function () {
    return view('layout');
});
Route::resource('items', ItemController::class);
