<?php

use App\Http\Livewire\PermissionEdit;
use App\Http\Livewire\RoleCreate;
use App\Http\Livewire\RoleEdit;
use App\Http\Livewire\Roles;
use App\Http\Livewire\UserCreate;
use App\Http\Livewire\UserEdit;
use App\Http\Livewire\UserForm;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MyPosts;
use App\Http\Livewire\Myhome;
use App\Http\Livewire\Myaboutus;
use App\Http\Livewire\Mygallery;
use App\Http\Livewire\Myorder;
use App\Http\Livewire\Mycontactus;

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

    Route::prefix('guest')->group(function () {
        Route::get('/', fn() => view('layouts.guest'))->name('guest');
    });

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', fn() => view('dashboard'))->name('dashboard');
    });
    Route::prefix('home')->group(function () {
        Route::get('/', Myhome::class)->name('home');
    });
    Route::prefix('aboutus')->group(function () {
        Route::get('/', Myaboutus::class)->name('aboutus');
    });
    Route::prefix('gallery')->group(function () {
        Route::get('/', Mygallery::class)->name('gallery');
    });
    Route::prefix('order')->group(function () {
        Route::get('/', Myorder::class)->name('order');
    });
    Route::prefix('contactus')->group(function () {
        Route::get('/', Mycontactus::class)->name('contactus');
    });
    Route::prefix('post')->group(function () {
        Route::get('/', MyPosts::class)->name('post');
    });
    Route::prefix('manage-users')->group(function () {
        Route::get('/users', fn() => view('users'))->name('users');
        Route::get('/user/edit/{user}', UserEdit::class)->name('user.edit');
        Route::get('/user/create', UserCreate::class)->name('user.create');
    });
    Route::prefix('roles')->group(function () {
        Route::get('/', Roles::class)->name('roles');
        Route::get('/edit/{role}', RoleEdit::class)->name('role.edit');
        Route::get('/create', RoleCreate::class)->name('role.create');
    });
    Route::prefix('permissions')->group(function () {
        Route::get('/edit/{role}', PermissionEdit::class)->name('permission.edit');
    });
});