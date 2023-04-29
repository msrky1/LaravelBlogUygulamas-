<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Blog\BlogDetailComponent;

use App\Http\Controllers\API\AuthController;



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

// Route::get('/', function () {
//     return view('example');
// });






Route::get('/admin-paneli', function () {
    return view('example'); });


Auth::routes();
Route::post('/auth/login' , [AuthController::class, 'login'])->name('auth.login');


Route::post('/post' , [BlogController::class, 'store']);

Route::get('/user/data' , [BlogController::class , 'userdata']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::post('/comment' , [CommentController::class, 'comment'])->name('comment');
Route::post('/like' , [BlogDetailComponent::class, 'blogLike'])->name('like');
Route::get('/blog-list' , HomeComponent::class);
Route::get('/' , HomeComponent::class);
Route::get('/blog/detay/{slug}', BlogDetailComponent::class)->name('blog.detail');
// Route::get('/blog', [BlogController::class, 'Blog']);
// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::get('{any}', function () {
    return view('example');
})->where('any','.*');