<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\UserContoller;
use App\Http\Controllers\PostController;
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


Route::get('/', function () {
    if (Auth::check()) {
        // User logged in
        return app(PostController::class)->index();
    } else {
        // User not logged in
        return app(UserContoller::class)->index();
    }
});
Route::get('/contact', [UserContoller::class, 'contact']);
Route::get('/blog', [UserContoller::class, 'blog']);
Route::middleware(['auth'])->group(function () {
    Route::get('/create-post', [PostController::class, 'view_post']);
    Route::post('/store-post', [PostController::class, 'store_post']);
    Route::get('/edit-post/{id}', [PostController::class, 'edit_post']);
    Route::post('/delete-post/{id}', [PostController::class, 'delete_post']);
    Route::post('/update-post/{id}', [PostController::class, 'update_post']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
