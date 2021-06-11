<?php

use App\Http\Controllers\Auth\AllAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetController;
use App\Http\Controllers\Auth\SettingProfileController;


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
    return view('home');
})->name('home');

Route::get('/services', function () {
    return view('frontend.pages.services');
})->name('services');

Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');

Route::get('/blog', function () {
    return view('frontend.pages.blog');
})->name('blog');

Route::get('/blog/post', function () {
    return view('frontend.pages.blog-post');
})->name('blog-post');


Route::get('auth/register', [AllAuthController::class , 'register'])->name('register.index');
Route::get('auth/login', [AllAuthController::class , 'login'])->name('login.index');
Route::get('auth/profile', [AllAuthController::class , 'profile'])->name('profile.index');
Route::get('auth/reset', [AllAuthController::class , 'reset'])->name('reset.index');
Route::get('auth/forgot/password', [AllAuthController::class , 'forgotPassword'])->name('forgotPassword.index');
Route::get('auth/setting/profile', [AllAuthController::class , 'settingProfile'])->name('settingProfile.index');


Route::post('register',[RegisterController::class , 'store'])->name('register.store');
Route::get('login',[LoginController::class , 'store'])->name('login.store');
Route::get('logout',[ProfileController::class , 'logout'])->name('profile.logout');
Route::post('forgot-password',[ForgotPasswordController::class , 'store'])->name('forgot-password.store');
Route::post('reset-forgot-password',[ResetController::class , 'store'])->name('reset-forgot-password.store');
Route::put('update/profile',[SettingProfileController::class , 'updateProfile'])->name('setting-profile.updateProfile');
Route::put('update/password',[SettingProfileController::class , 'updatePassword'])->name('setting-profile.updatePassword');
Route::delete('delete/profile',[SettingProfileController::class , 'destroyProfile'])->name('setting-profile.destroy');


Route::delete('/delete/{id}/user',[UserController::class , 'destroy'])->name('user.destroy');
Route::put('/update/role/{id}/user',[UserController::class , 'updateRole'])->name('role.update');

