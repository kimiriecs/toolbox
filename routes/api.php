<?php

use Modules\Users\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




/**
 * Default api route`
 */
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::prefix('users')->group(function() {
//     // Route::get('/{id}', [UserController::class, 'getUser']);
//     Route::get('/trainees', [UserController::class, 'showAllTrainees']);
//     Route::get('/roles/{role}', [UserController::class, 'getUserByRole']);
//     Route::get('/{user}/isadmin', [UserController::class, 'isAdmin']);
//     Route::get('/{user}/role', [UserController::class, 'checkRoleByUserId']);
//     Route::get('/{user}/{role}', [UserController::class, 'hasRole']);
//     Route::get('/{user}', [UserController::class, 'show']);
//     Route::get('/', [UserController::class, 'showAll']);

// });