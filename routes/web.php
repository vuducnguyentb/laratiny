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
    $post = \App\Models\Post::all();
    return view('welcome',['post' => $post]);
});
Route::get('/post/{slug}', function($slug) {
    $post = \App\Models\Post::where('slug',$slug)->firstOrFail();
    return view('detail',['post' => $post]);
})->name('detail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::post('/create', [App\Http\Controllers\HomeController::class, 'store'])->name('store');

