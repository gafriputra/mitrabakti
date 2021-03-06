<?php

use Illuminate\Support\Facades\Auth;
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

Route::resource('/invoice', 'InvoiceController');
Route::get('/kirim-invoice', 'InvoiceController@tampil')->name('kirim-invoice');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin', 'verified']) // nambahin satpamnya dr kernel
    ->group(function () {

        Route::get('/', function () {
            return view('pages.admin.dashboard');
        });
        // store
        Route::resource('product-categories', 'Store\Product\ProductCategoriesController');
        Route::resource('products', 'Store\Product\ProductsController');
        Route::resource('gallery', 'Store\Product\GalleriesController');
        Route::resource('document', 'Store\Product\DocumentsController');
        Route::resource('transaction', 'Store\TransactionsController');
        Route::get('transactionStatus', 'Store\TransactionsController@setStatus')->name('transactionStatus');
        // company profile
        Route::resource('banners', 'CompanyProfile\BannersController');
        Route::resource('setting', 'CompanyProfile\WebSettingController');
        Route::resource('services', 'CompanyProfile\ServicesController');



        Route::get('/document', function () {
            return view('pages.admin.product.document');
        })->name('document');
        Route::get('/form-document', function () {
            return view('pages.admin.product.form-document');
        })->name('form-document');
    });


Route::get('/pdf/{id}', 'PdfController@print')->name('print');
Auth::routes(['verify' => true]);

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
