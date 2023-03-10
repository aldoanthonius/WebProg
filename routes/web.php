<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TransactionController;

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

Route::get('/cart', [CartController::class, 'viewCart'])->middleware('auth', 'memberM');
Route::post('/addToCart', [CartController::class, 'addToCart'])->middleware('auth', 'memberM');
Route::post('/updateCart', [CartController::class, 'updateCart'])->middleware('auth', 'memberM');
Route::post('removeFromCart', [CartController::class, 'removeFromCart'])->middleware('auth', 'memberM');
Route::get('/editCart/{id}', [CartController::class, 'editCart'])->middleware('auth', 'memberM');

Route::get('/transaction_history', [TransactionController::class, 'get_transaction_history'])->middleware('auth', 'memberM');
Route::post('/checkout', [TransactionController::class, 'checkout'])->middleware('auth', 'memberM');

Route::get('/details/{id}', [ProductController::class, 'getDetails'])->middleware('auth', 'memberM');
Route::get('/details/{id}/edit', [ProductController::class, 'getDetailsAdmin'])->middleware('auth', 'adminM');

Route::post('/deleteItem', [ProductController::class, 'deleteItem'])->middleware('auth', 'adminM');

Route::get('/adminSearch', [ProductController::class, 'viewSearchPageAdmin']);
Route::get('/memberSearch', [ProductController::class, 'viewSearchPageMember']);

Route::get('/editPasswordM', [EditController::class, 'viewEditPasswordM']);
Route::post('/editPasswordM', [EditController::class, 'editPasswordM']);

Route::get('/editPasswordA', [EditController::class, 'viewEditPasswordA']);
Route::post('/editPasswordA', [EditController::class, 'editPasswordA']);

Route::get('/adminAddItem', [ProductController::class, 'addItem']);
Route::post('/adminAddItem', [ProductController::class, 'addedItem']);
