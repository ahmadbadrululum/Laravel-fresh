<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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


// returns the home page with all posts
// Route::get('/', ProductController::class .'@index')->name('posts.index');
// // returns the form for adding a post
// Route::get('/posts/create', ProductController::class . '@create')->name('posts.create');
// // adds a post to the database
// Route::post('/posts', ProductController::class .'@store')->name('posts.store');
// // returns a page that shows a full post
// Route::get('/posts/{post}', ProductController::class .'@show')->name('posts.show');
// // returns the form for editing a post
// Route::get('/posts/{post}/edit', ProductController::class .'@edit')->name('posts.edit');
// // updates a post
// Route::put('/posts/{post}', ProductController::class .'@update')->name('posts.update');
// // deletes a post
// Route::delete('/posts/{post}', ProductController::class .'@destroy')->name('posts.destroy');



Route::resource('/products', ProductController::class);

// Route::get('/products/{product}/delete', 'ProductController@destroy')->name('products.destroy');
// Route::group(['prefix' => 'products'], function () {
//     Route::get('/{product}/delete', 'ProductController@destroy')->name('products.destroy');
// }
