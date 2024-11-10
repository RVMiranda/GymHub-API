<?php

use App\Http\Controllers\loginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/gym-owner', function (Request $request){
     return response()->json('EVC Calistenia');
});
// eso equivale a esta nueva nomenclatura ->

//Route::apiResource('gym-owner', loginController::class);