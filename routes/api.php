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
use App\Http\Controllers\GetVideoByAutor;
use App\Http\Controllers\Video;
use App\Http\Controllers\GetVideoById;
use App\Http\Controllers\VideoById;
use App\Http\Controllers\Like;
use App\Http\Controllers\GetComment;
use App\Http\Controllers\PostComment;
use App\Http\Controllers\UserReg;
use App\Http\Controllers\GetVideo;

Route::get('/GetUser/{login}', [GetUserByLogin::class, 'index']);

Route::get('/GetUser', [GetUser::class, 'index']);

Route::get('/profileImage/{login}', [GetProfileImageAva::class, 'index']);

Route::get('/profileHeader/{login}', [GetProfileImageHeader::class, 'index']);

Route::get('/AddUser', [AddUser::class, 'index']);

Route::get('/getVideo/{autor}', [GetVideoByAutor::class, 'index']);

Route::get('/getVideo', [GetVideo::class, 'index']);

Route::get('/getVideoById/{id}', [GetVideoById::class, 'index']);

Route::get('/video/{autor}', [Video::class, 'index']);

Route::get('/videoById/{id}', [VideoById::class, 'index']);

Route::get('/like/{id}', [Like::class, 'index']);

Route::get('/GetComment/{id}', [GetComment::class, 'index']);

Route::post('/loginPOST', [loginPOST::class, 'index']);

Route::post('/profileImageUpdade', [profileImageUpdade::class, 'store']);

Route::post('/PostComment', [PostComment::class, 'index']);

Route::post('/PostRegistationUser', [UserReg::class, 'index']);
