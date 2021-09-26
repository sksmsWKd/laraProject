<?php

use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\KakaoAuthController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/kakao/login', [KakaoAuthController::class, 'redirect'])->name('kakao.login');

Route::get('/kakao/callback', [KakaoAuthController::class, 'callback']);

Route::get('/github/login', [GithubAuthController::class, 'redirect'])->name('github.login');

Route::get('/github/callback', [GithubAuthController::class, 'callback']);


Route::get('/google/login', [GoogleAuthController::class, 'redirect'])->name('google.login');


Route::get('/google/callback', [GoogleAuthController::class, 'callback']);
