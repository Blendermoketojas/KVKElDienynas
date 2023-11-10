<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InternshipController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserInfoController;

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

    // Route::redirect('/', '/Login');
    // Route::get('/Login', function () {
    //     return view('Login');
    // })->name('auth');

    Route::middleware('role.level:1,2,3')->group(function () {

    });

    Route::post('/LoginCheck', [LoginController::class, 'login'])->name('login');

    Route::post('/userinfo', [UserInfoController::class, 'getUserInfo'])->name('userInfo');

    // Route::get('/api/user', 'LoginController@login');

    route::post('/updateprofile', [UserInfoController::class, 'updateUserInfo'])->name('updateProfile');

    route::get('/retrievecompanydata', [CompanyController::class, 'retrieveData'])->name('retrieveCompanyData');

    route::post('/sendevent', [InternshipController::class, 'sendEvent'])->name('sendEvent');

    route::get('/pullevents', [InternshipController::class, 'pullEvents'])->name('pullEvents');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});
