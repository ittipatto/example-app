<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\GunController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'checkLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/gun', [GunController::class,'index'] );

Route::middleware(['auth.admin'])->group(function() {
    Route::get('/content', [ContentController::class,'index'] );
    Route::get('/content/create', [ContentController::class,'create'] );
    Route::get('/content/{id}/edit', [ContentController::class,'edit'] );

    Route::put('/content/{id}', [ContentController::class,'update']);
    Route::post('/content', [ContentController::class,'store'] );

    Route::delete('/content/{id}', [ContentController::class,'destroy'] );
});

// Hello Teen
// Hello Mek
