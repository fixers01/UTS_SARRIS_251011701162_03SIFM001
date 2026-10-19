<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RecipeController::class, 'home'])
    ->name('home');

Route::get('/recipes', [RecipeController::class, 'index'])
    ->name('recipes.index');

Route::get('/categories/{category}', [RecipeController::class, 'category'])
    ->name('recipes.category');

Route::view('/about', 'about')
    ->name('about');

Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])
    ->name('recipes.show');
