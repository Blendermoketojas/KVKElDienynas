<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->group(function () {
    
        Route::redirect('/', '/Login');
        Route::get('/Login', function () {
            return view('Login');
        })->name('auth');

        Route::post('/LoginCheck', [LoginController::class, 'login'])->name('login');

        Route::get('/api/user', 'LoginController@login');
        
        Route::get('/MainPage', function () {
            return view('Main');
        });
        
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
        
        Route::get('/Layout', function () {
            return view('Login');
        });
        Route::get('/ProfileInfo', function () {
            return view('ProfileInfo');
        })->name('profileInfo');
       
});
