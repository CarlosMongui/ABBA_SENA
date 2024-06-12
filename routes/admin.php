<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get("", [AdminController::class, "index"])->name('admin.posts');

Route::get("users", [AdminController::class, "indexUser"])->name('admin.user');
Route::get("posts/{user}", [AdminController::class, "showPosts"])->name('admin.posts.user');
Route::get("reports/{user}", [AdminController::class, "showReports"])->name('admin.reports.user');