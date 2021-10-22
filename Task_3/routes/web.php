<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployerController;

Route::get('/', function () {return view('pages.home');})->name('home');
Route::get('/registration',[RegistrationController::class,'registration'])->name('signup');
Route::post('/registration',[RegistrationController::class,'validateRegistration'])->name('signup');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginCheck'])->name('login');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::post('/contact',[ContactController::class,'validateContact'])->name('contact');
Route::get('/logout',[LogoutController::class,'logout'])->name('logout');
Route::get('/admin/dash',[AdminController::class,'dashboard'])->name('dashboardAdmin')->middleware('AdminIsValidCheck');
Route::get('/employer/dash',[EmployerController::class,'dashboard'])->name('dashboardEmployer')->middleware('EmployerIsValidCheck');
Route::get('/admin/edit',[AdminController::class,'editAdminInfo'])->name('editAdminInfo')->middleware('AdminIsValidCheck');
Route::post('/admin/edit',[AdminController::class,'adminInfoUpdate'])->name('adminInfoUpdate')->middleware('AdminIsValidCheck');
Route::get('/employer/edit',[EmployerController::class,'editEmployerInfo'])->name('editEmployerInfo')->middleware('EmployerIsValidCheck');
Route::post('/employer/edit',[EmployerController::class,'employerInfoUpdate'])->name('employerInfoUpdate')->middleware('EmployerIsValidCheck');