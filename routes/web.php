<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

//All blogs
Route::get('/', function () {
    return view('blogs',[
        'blogs' => Blog::orderBy('created_at','desc')->paginate(3)
    ]);
});

//View one blog
Route::get('/blogs/{blog}',function(Blog $blog){
    return view('blog',[
        'blog' => $blog
    ]);
});

//Add Blog Page
Route::get('/addBlogPage',function(){
    return view('addBlog');
});
//Add Blog
Route::post('/addBlog',[BlogController::class,'addBlog'])->name('blogs#addBlog');

//edit Blog Page
Route::get('/editBlog/{id}',[BlogController::class,'editBlog'])->name('blogs#editBlog');
//update Blog
Route::post('/update',[BlogController::class,'update'])->name('blogs#updateBlog');


//delete blog
Route::get('/blogDelete/{id}',[BlogController::class,'blogDelete'])->name('blogs#blogDelete');

