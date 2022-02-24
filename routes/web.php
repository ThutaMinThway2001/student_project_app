<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Auth;
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
Route::middleware('auth')->group(function(){
    //user
    Route::get('/', [CourseController::class, 'index'])->name("home");
    Route::get('/about', [CourseController::class, 'aboutUs'])->name("aboutUs");
    Route::get('/courses', [CourseController::class, 'course'])->name("course");

    Route::middleware('admin')->group(function(){
        //admin
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
        Route::get('/admin/createProject', [AdminController::class, 'createProject'])->name('admin.createProject');
        Route::post('/admin/createProject', [AdminController::class, 'postProject'])->name('admin.postProject');
        Route::get('/admin/delete/course/{id}', [AdminController::class, 'deleteProject'])->name('admin.deleteProject');
        Route::get('/admin/basic-course', [AdminController::class, 'basicClass'])->name("admin.basicClass");
        Route::get('/admin/n5-course', [AdminController::class, 'n5Class'])->name("admin.n5Class");
        Route::get('/admin/n4-course', [AdminController::class, 'n4Class'])->name("admin.n4Class");
        Route::get('/admin/user-lists', [AdminController::class, 'userLists'])->name('admin.userLists');
    });
});

Route::middleware('noLogin')->group(function(){
    //auth
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'userLogin'])->name('userLogin');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'userRegistration'])->name('userRegistration');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
