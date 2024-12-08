<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Http\Controllers\Administration\FoodplannerController;



Route::controller(FoodplannerController::class)->group(function () {
    Route::prefix('foodplanner')->group(function () {
        Route::get('ingridients','getIngridients');
        Route::get('ingridient-categories', 'getIngridientCategories');
        Route::get('meals', 'getMeals');
    });
});





