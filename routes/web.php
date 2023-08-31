<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogCategory;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BlogGuestController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\KategoriGaleriController;
use App\Http\Controllers\MiminController;
use App\Http\Controllers\homeController;

// halaman guest
Route::get('/', [MainController::class, 'index'])->middleware('guest');
Route::get('/tentang', [MainController::class, 'tentang'])->middleware('guest');
Route::get('/kajian', [MainController::class, 'kajian'])->middleware('guest');

Route::get('/dest', [homeController::class, 'destinasi'])->name('publicDestinasi');
Route::get('dest/detail/{id}', [homeController::class, 'detail'])->name('detailDestinasi');
Route::get('/dest/filter', [homeController::class, 'filter'])->name('filterDestinasi');

//blog guest
Route::get('/artikel', [BlogGuestController::class, 'index'])->middleware('guest');
Route::get('/artikel/{blog}', [BlogGuestController::class, 'show'])->middleware('guest');


// galeri guest
Route::get('/galeri', [MainController::class, 'galeriIndex'])->middleware('guest');


// partnership
Route::get('/partnership', [MainController::class, 'partnerIndex'])->middleware('guest');


// <-- Bagian Admin -->

// form login dan logout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->middleware('auth');
Route::get('/blogCreate', [BlogController::class, 'create'])->middleware('auth');
Route::post('/blogCreate', [BlogController::class, 'store']);


// ..............
Route::resource('/dashboard/blog', BlogController::class)->middleware('auth');

Route::get('/blogCategory', [BlogCategory::class, 'index'])->middleware('auth');
Route::post('/blogCategory', [BlogCategory::class, 'store']);


// users
Route::resource('/dashboard/user', User_Controller::class)->middleware('auth');


// galeri
Route::resource('/dashboard/galeri', GaleriController::class)->middleware('auth');
Route::resource('/dashboard/galeri-kategori', KategoriGaleriController::class)->middleware('auth');


// partnership
Route::resource('/dashboard/partnership', PartnershipController::class)->middleware('auth');


// Destinasi
Route::get('admin/destinasi', [MiminController::class, 'index'])->name('destinasi')->middleware('auth');
Route::get('admin/destinasi/tambah', [MiminController::class, 'tambahDestinasi'])->name('tambahDestinasi')->middleware('auth');
Route::post('admin/destinasi/store', [MiminController::class, 'store'])->name('storeDestinasi')->middleware('auth');
Route::get('admin/destinasi/delete/{id}', [MiminController::class, 'delete'])->name('deleteDestinasi')->middleware('auth');
Route::get('admin/destinasi/edit/{id}', [MiminController::class, 'edit'])->name('editDestinasi')->middleware('auth');
Route::post('admin/destinasi/update/{id}', [MiminController::class, 'update'])->name('updateDestinasi')->middleware('auth');
Route::delete('admin/destinasi/delete/{id}', [MiminController::class, 'delete'])->name('deleteDestinasi')->middleware('auth');
Route::get('admin/destinasi/search', [MiminController::class, 'search'])->name('searchDestinasi');