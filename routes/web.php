<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [PagesController::class, 'showHomePage']);

Route::get('/post/{id}', [PostsController::class, 'getPostById']);


Route::get('/user', [PagesController::class, 'showUserPage'])->middleware(['auth']);
Route::get('/user/post/new', [PostsController::class, 'showNewPostForm'])->middleware(['auth']);
Route::get('/user/post/edit/{id}', [PostsController::class, 'showEditPostForm'])->middleware(['auth']);
Route::post('/user/post', [PostsController::class, 'createNewPost'])->middleware(['auth']);
Route::put('/user/post/{id}', [PostsController::class, 'editPost'])->middleware(['auth']);
Route::delete('/user/post/{id}', [PostsController::class, 'deletePost'])->middleware(['auth']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
