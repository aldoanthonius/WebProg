<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [LoginController::class, 'signin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'afterRegis']);

// Route::get('/member', [MemberController::class, 'member'])->middleware('auth','memberM');
// Route::get('/admin', [AdminController::class, 'admin'])->middleware('auth','adminM');

Route::get('/profileM', [ProfileController::class,'profileM'])->middleware('auth','memberM');
Route::get('/profileA', [ProfileController::class,'profileA'])->middleware('auth','adminM');

Route::get('/editProfile', [EditController::class, 'editProfile']);
Route::post('/profileM', [EditController::class, 'editedProfile']);

Route::get('/member', [ProductController::class, 'viewProductMember'])->middleware('auth','memberM');
Route::get('/admin', [ProductController::class, 'viewProductAdmin'])->middleware('auth','adminM');

Route::get('/adminSearch', [ProductController::class, 'viewSearchPageAdmin']);
Route::get('/memberSearch', [ProductController::class, 'viewSearchPageMember']);

