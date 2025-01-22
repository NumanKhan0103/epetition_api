<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\AuthorController;
use App\Http\Controllers\API\V1\PetitionController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::apiResource('/petitions', PetitionController::class);

Route::resource('/authors', AuthorController::class)->only(['index', 'show']);