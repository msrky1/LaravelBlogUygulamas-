<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Blog\BlogDetailComponent;




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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('{any}', function () {
//     return view('example');
// })->where('any','.*');





Route::get('/admin-paneli', function () {
    return view('example'); });



Auth::routes();


Route::post('/post' , [BlogController::class, 'store']);

Route::post('/comment' , [CommentController::class, 'comment'])->name('comment');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog-list' , HomeComponent::class);
Route::get('/blog/detay/{slug}', BlogDetailComponent::class)->name('blog.detail');
// Route::get('/blog', [BlogController::class, 'Blog']);
// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
