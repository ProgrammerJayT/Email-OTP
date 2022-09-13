<?php

use Illuminate\Http\Request;
use App\Http\Controllers\MailControl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OTPControl;

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

Route::post('/getEmail', [MailControl::class, 'getEmail'])->name('getEmail');

Route::get('/getOTP', [OTPControl::class, 'getOTP'])->name('getOTP');

Route::post('/verify', [OTPControl::class, 'verify'])->name('verify');
