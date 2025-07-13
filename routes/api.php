<?php

use App\Http\Controllers\Dish;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'dish'], function () {
    Route::get('/', Dish\ListDishAction::class);
    Route::post('/create', Dish\CreateDishAction::class);
});
