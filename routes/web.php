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

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin', 'verified']) // nambahin satpamnya dr kernel
    ->group(function () {

        Route::get('/', function () {
            return view('pages.admin.dashboard');
        });

        Route::get('/category', function () {
            return view('pages.admin.product.category');
        })->name('category');
        Route::get('/form-category', function () {
            return view('pages.admin.product.form-category');
        })->name('form-category');

        Route::get('/product', function () {
            return view('pages.admin.product.product');
        })->name('product');
        Route::get('/form-product', function () {
            return view('pages.admin.product.form-product');
        })->name('form-product');

        Route::get('/gallery', function () {
            return view('pages.admin.product.gallery');
        })->name('gallery');
        Route::get('/form-gallery', function () {
            return view('pages.admin.product.form-gallery');
        })->name('form-gallery');



        Route::get('/document', function () {
            return view('pages.admin.product.document');
        })->name('document');
        Route::get('/form-document', function () {
            return view('pages.admin.product.form-document');
        })->name('form-document');
    });




Auth::routes(['verify' => true]);
