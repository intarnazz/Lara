<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\GetUser;
use App\Http\Controllers\AddUser;
use App\Http\Controllers\loginPOST;
use App\Http\Controllers\GetUserByLogin;
use App\Http\Controllers\profileImageUpdade;
use App\Http\Controllers\GetProfileImageAva;
use App\Http\Controllers\GetProfileImageHeader;

Route::get('/GetUser/{login}', [GetUserByLogin::class, 'index']);

Route::get('/GetUser', [GetUser::class, 'index']);

Route::get('/profileImage/{login}', [GetProfileImageAva::class, 'index']);

Route::get('/profileHeader/{login}', [GetProfileImageHeader::class, 'index']);

Route::get('/AddUser', [AddUser::class, 'index']);

Route::post('/loginPOST', [loginPOST::class, 'index']);

Route::post('/profileImageUpdade', [profileImageUpdade::class, 'store']);




