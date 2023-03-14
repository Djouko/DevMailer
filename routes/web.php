<?php

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

Route::get('/users', [UserController::class, 'index'])->name('users.index');


// all users
Route::get('/send/mail/view/all', [UserController::class, 'emailViewAll'])->name('send.email.view.all');

Route::post('/store/email/all', [UserController::class, 'storeAllUserEmail'])->name('store.alluser.email');


// single users
Route::get('/send/mail/view/{id}', [UserController::class, 'emailView'])->name('send.email.view');

Route::post('/store/email/{id}', [UserController::class, 'storeSingleEmail'])->name('store.user.email');
