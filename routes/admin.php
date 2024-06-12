<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get("", [HomeController::class, "index"])->name('admin.posts');

Route::get("users", [HomeController::class, "indexUser"])->name('admin.user');
Route::get("posts/{user}", [HomeController::class, "showPosts"])->name('admin.posts.user');
Route::get("reports/{user}", [HomeController::class, "showReports"])->name('admin.reports.user');