<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('hello');
// });

Route::view('/about', 'hello');

Route::get('/posts/{id?}', function (string $id = null) {
    if ($id) {
        return "<h1>POSTS ID: $id </h1>";
    } else {
        return "<h1>No ID found!</h1>";
    }
})->whereNumber('id');

Route::get('/category/{cat?}', function (string $cat) {
    if ($cat) {
        return "<h1>Category ID: $cat </h1>";
    } else {
        return "<h1>No Category found!</h1>";
    }
})->whereIn('cat', ['movie', 'songs', 'paintings']);
