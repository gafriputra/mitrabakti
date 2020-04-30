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

Route::get('/admin', function () {
    return view('pages.admin.dashboard');
});
Route::get('/admin/kategori', function () {
    return view('pages.admin.product.kategori');
});
Route::get('/admin/addkategori', function () {
    return view('pages.admin.product.form-kategori');
});
Route::get('/login', function () {
    return view('pages.admin.login');
})->name('login');
Route::get('/register', function () {
    return view('pages.admin.register');
})->name('register');
Route::get('/forgot', function () {
    return view('pages.admin.forgot');
})->name('forgot');
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
