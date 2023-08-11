<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;



Route::get('blog',[PostController::class,'blogpage'])->name('blogpage');
Route::get('blog/{slug}',[PostController::class,'show']);

Route::get('blog/category/{slug}',[PostController::class,'showCategory']);



Route::get('/',[PostController::class,'homePage']);


// Route::get('/', function () {
//     return view('blog.index');
// });


Route::get('/contact-us', function () {
    return view('blog.contact-us');
});

Route::get('sample',[AdminController::class,'sample']);


Route::get('create-tag',[TagController::class,'create']);
Route::post('store-tag',[TagController::class,'store'])->name('admin.tag.create');

Route::get('createCategory',[AdminController::class,'createCategory']);
Route::post('store-category',[AdminController::class,'storeCategory'])->name('admin.category.create');

Route::get('create',[AdminController::class,'create']);
Route::post('store',[AdminController::class,'store'])->name('admin.post.create');


Route::get('adminh',[AdminController::class,'homepage'])->name('adminh');
Route::post('store-info',[AdminController::class,'store_review'])->name('client.contact.create');




