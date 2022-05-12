<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\LogoutController;
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
    if (!auth()->user()) {
        return redirect()->route('login');
    } else {
        return redirect()->route('user.index');
    }
})->name("defaultPage");

Route::middleware(['web', 'guest'])->group(function () {
    Route::get('/login', [loginController::class, 'login'])->name('login');
    Route::post('/login', [loginController::class, 'doLogin'])->name('doLogin');
});

// Route::middleware(['web', 'auth'])->group(function () {
//     Route::resource('/user', userController::class);
//     Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
//     Route::resource('/information', userController::class);
//     Route::get('/account_information',[userController::class,'viewInformation']);
// });


Route::middleware(['web', 'auth'])->group( function () {
    // Route::get('/user', [userController::class, 'thongke']);
    Route::get('/user', [userController::class, 'index'])->name('thongke');

    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});

