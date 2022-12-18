<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RouteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// get all blogs
Route::get('/blogs',[RouteController::class,'blogs']);

//add new blog
Route::post('/add/blog',[RouteController::class,'addBlog']);

//delete blog
Route::post('/delete/blog',[RouteController::class,'deleteBlog']);

//detail blog
Route::get('/blog/detail/{id}',[RouteController::class,'blogDetail']);

//Blog Update
Route::post('/blog/update',[RouteController::class,'blogUpdate']);


