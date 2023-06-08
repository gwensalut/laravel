<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AuthController;
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





Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('/', [LandingController::class,'index'])->name('landing');

Route::get('/news', [NewsController::class,'index'])->name('news');

Route::get('/profile', [ProfileController::class,'index'])->name('profile');

Route::get('/events', [EventsController::class,'index'])->name('events');

Route::get('/contacts', [ContactsController::class,'index'])->name('contacts');


Route::post('/contacts/submit', [ContactsController::class,'submit'])->name('contacts.submit');

Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('login.submit');

Route::get('/logout', [AuthController::class,'logout'])->name('logout');
