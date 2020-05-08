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
    return view('index');
});

Route::get('/elements', function() {
    return view('templates.elements.index');
});

Route::get('/contact', function() {
    return view('templates.contact.index');
});

Route::get('/blog', function() {
    return view('templates.blog.index');
});

Route::get('/services', function() {
    return view('templates.servces.index');
});

Route::get('/admin', function() {
    return view('admin.index');
});

Route::get('/admin/home', function() {
    return view('admin.home');
});

Route::get('/admin/services', function() {
    return view('admin.services');
});

Route::get('/admin/blog', function() {
    return view('admin.blog');
});

Route::get('/admin/contact', function() {
    return view('admin.contact');
});

Route::get('/admin/elements', function() {
    return view('admin.elements');
});