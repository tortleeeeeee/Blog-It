<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get("/", [BlogController::class, 'dashboard'])->name('blogs_view.dashboard');
Route::post("/", [BlogController::class,'saveBlog'])->name('blogs_view.saveBlog');
Route::get("/blogs_view.viewBlogs", [BlogController::class,'viewBlogs'])->name('blogs_view.viewBlogs');
Route::get("/blogs_view.viewBlogs/{blog}/editBlog", [BlogController::class,'editBlog'])->name('blogs_view.editBlog');

Route::put("/blogs/{blog}/updateBlog", [BlogController::class,'updateBlog'])->name('blogs_view.updateBlog');
Route::delete("/blogs/{blog}/deleteBlog", [BlogController::class,'deleteBlog'])->name('blogs_view.deleteBlog');
