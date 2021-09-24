<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('student', function(){
//     return "All student Data"; 
// });


// ************** Fully Public Api Routes (Start) ************************* //

    // Route::get('/students', [StudentController::class, 'index']);
    // Route::get('/students/{id}', [StudentController::class, 'show']);
    // Route::post('/students', [StudentController::class, 'store']);
    // Route::put('/students/{id}', [StudentController::class, 'update']);
    // Route::delete('/students/{id}', [StudentController::class, 'destroy']);
    // Route::get('/students/search/{city}', [StudentController::class, 'search']);

// ************** Fully Public Api Routes (End) ************************* //

// ************** Api Token Routes (Start) ****************************//

    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);

// ************** Api Token Routes (End) ****************************//

// ************** Private Routes (Start) ****************************//

    // ************** Routes Middleware (Start) ****************************//
        // Route::middleware('auth:sanctum')->get('/students', [StudentController::class, 'index']);
        // Route::middleware('auth:sanctum')->get('/students/{id}', [StudentController::class, 'show']);
    // ************** Routes Middleware (End) ****************************//

    // ************** Group Middleware (Start) ****************************//
        // Route::middleware(['auth:sanctum'])->group(function(){
        //     Route::get('/students', [StudentController::class, 'index']);
        //     Route::get('/students/{id}', [StudentController::class, 'show']);
        //     Route::post('/students', [StudentController::class, 'store']);
        //     Route::put('/students/{id}', [StudentController::class, 'update']);
        //     Route::delete('/students/{id}', [StudentController::class, 'destroy']);
        //     Route::get('/students/search/{city}', [StudentController::class, 'search']);
        //     Route::post('/logout', [UserController::class, 'logout']);
        // });
    // ************** Group Middleware (End) ****************************//

// ************** Private Routes (End) *****************************//

// ************** Partially Protect Routes (Start) ****************************//
    //Public
        Route::get('/students', [StudentController::class, 'index']);
        Route::get('/students/{id}', [StudentController::class, 'show']);
        Route::get('/students/search/{city}', [StudentController::class, 'search']);
    //Private
        Route::middleware(['auth:sanctum'])->group(function(){
            Route::post('/students', [StudentController::class, 'store']);
            Route::put('/students/{id}', [StudentController::class, 'update']);
            Route::delete('/students/{id}', [StudentController::class, 'destroy']);
            Route::post('/logout', [UserController::class, 'logout']);
        });

// ************** Partially Protect Routes (End) ****************************//




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
