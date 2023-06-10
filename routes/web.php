<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/index-curd', function () {
    return view('index_curd');
});
Route::get('/student-add', function () {
    return view('student_add');
});
Route::get('/edit-student', function () {
    return view('edit_student');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/product-details', function () {
    return view('product_details');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});

