<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Pagina Principal
Route::get('/', IndexController::class);

// Forma de acceder a todas las URLs del controlador respete la autenticación
Route::resource('posts', PostController::class)->middleware('auth');

Auth::routes();
// Rutas que se utilizan cuando se loguea
Route::get("/home", PrincipalController::class);

Route::group(['middleware' => 'auth'], function () {
    //Publicaciones
    ////Pagina de Busqueda
    Route::get('/busqueda',[PostController::class,'index'])->name('post.busqueda');
    ////Pagina de Adopcion
    Route::get('/adopcion',[PostController::class,'index2'])->name('post.adopcion');
    ////Pagina de tus propios posts
    Route::get('/tus-posts', [PostController::class,"show"])->name("post.self");
    Route::post('/tus-posts', [PostController::class,"store"])->name("post.post");
    ////Pagina para crear posts
    Route::get('/tus-posts/add',[PostController::class,'create'])->name('post.new');
    ////Pagina para editar posts
    Route::get('/tus-posts/{post}/edit', [PostController::class,"edit"])->name("post.edit");
    Route::patch('/tus-posts/{post}', [PostController::class,"update"])->name("post.update");
    ////Destruir posts
    Route::delete('/tus-posts/{post}/destroy', [PostController::class,"destroy"])->name("post.destroy");

    //Usuario
    ////Pagina de configuracion
    Route::get('/configuracion', [UserController::class,"config"])->name("user.config");
    ////Actualización datos usuario
    Route::patch('/configuracion/{user}', [UserController::class,"update"])->name("user.update");
    ////Eliminacion cuenta usuario
    Route::delete('/configuracion/{user}/destroy/', [UserController::class,"destroy"])->name("user.destroy");

    //Reportes
    ////Crear reporte
    Route::post('/reports/{post}', [ReportController::class,"store"])->name('reports.store');
    ////Eliminar reporte (admin)
    Route::delete('/reports/{report}/destroy', [ReportController::class,"destroy"])->name('report.destroy');
});