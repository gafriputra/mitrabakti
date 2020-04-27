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
    return view('pages.cp.home');
})
    ->name('Home');
Route::get('/about', function () {
    return view('pages.cp.about');
})
    ->name('About');
Route::get('/projects', function () {
    return view('pages.cp.projects');
})
    ->name('Projects');
Route::get('/blog', function () {
    return view('pages.cp.blog');
})
    ->name('Blog');
Route::get('/contact', function () {
    return view('pages.cp.contact');
})
    ->name('Contact');
Route::get('blog/{slug}', function ($slug) {
    return view('pages.cp.blog-detail');
})->name('BlogDetail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
