<?php

use App\Http\Controllers\BookmarksController;
use App\Http\Controllers\ForumsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'showHomePage'])->name('showHomePage');
Route::get('/user',[UserController::class,'showUserPage'])->name('showUserPage');
Route::get('/search',[SearchController::class,'showSearchPage'])->name('showSearchPage');
Route::get('/message',[MessageController::class,'showMessagePage'])->name('showMessagePage');
Route::get('/settings',[SettingsController::class,'showSettingsPage'])->name('showSettingsPage');
Route::get('/bookmarks',[BookmarksController::class,'showBookmarksPage'])->name('showBookmarksPage');
Route::get('/forums',[ForumsController::class,'showForumsPage'])->name('showForumsPage');
