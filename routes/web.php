<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/estimate', [HomeController::class, 'estimate'])->name('estimate');
Route::post('/estimate/add', [HomeController::class, 'estimateAdd'])->name('estimate.add');





Route::get('admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('admin/dologin', [AuthController::class, 'doLogin'])->name('admin.dologin');
Route::post('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');


Route::prefix('admin')->middleware(['isAdmin'])->group(function () {
    
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/user', [UserController::class, 'index'])->name('admin.users');
    Route::get('/user/addedit/{id?}', [UserController::class, 'addedit'])->name('admin.user.addedit');
    Route::post('/user/add', [UserController::class, 'add'])->name('admin.user.add');
    Route::post('/user/edit', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');

    /** Role Routes */
    Route::get('/role', [RoleController::class, 'index'])->name('admin.roles');
    Route::get('/role/add', [RoleController::class, 'add'])->name('admin.role.add');
    Route::post('/role/create', [RoleController::class, 'createRole'])->name('admin.role.create');
    
    /**post Route */
    Route::get('/post', [PostController::class, 'index'])->name('admin.post');
    Route::get('/post/addedit/{id?}', [PostController::class, 'addedit'])->name('admin.post.addedit');
    Route::post('/post/add', [PostController::class, 'add'])->name('admin.post.add');
    Route::post('/post/edit', [PostController::class, 'edit'])->name('admin.post.edit');
    Route::get('/post/delete/{id}', [PostController::class, 'delete'])->name('admin.post.delete');
    


    Route::get('/estimate', [AdminController::class, 'estimate'])->name('admin.estimate');
    Route::get('/estimate/{id}', [AdminController::class, 'viewEstimate'])->name('admin.estimate.view');
    
    
});