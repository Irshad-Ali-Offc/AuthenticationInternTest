<?php

use App\Http\Controllers\AdminProfileManage;
use App\Http\Controllers\AuthController;
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


Route::get('/signup',[AuthController::class,'signup'])->name('signup');
Route::post('/signup',[AuthController::class,'signupdata'])->name('signupdata');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'logindata'])->name('logindata');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');


// admin routes


Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin',[AdminProfileManage::class,'admin'])->name('admin');

    Route::get('/profile',[AdminProfileManage::class,'profile'])->name('profile');
    Route::PUT('/profile/update',[AdminProfileManage::class,'update'])->name('profile.update');
    Route::DELETE('/profile/delete',[AdminProfileManage::class,'delete'])->name('profile.delete');



});


