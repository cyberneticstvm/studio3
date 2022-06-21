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
    return view('default');
});
Route::get('/about/', function () {
    return view('about');
});
Route::get('/services/', function () {
    return view('services');
});
Route::get('/projects/interior/', function () {
    return view('projects.interior');
});
Route::get('/projects/architectural/', function () {
    return view('projects.architectural');
});
Route::get('/projects/landscape/', function () {
    return view('projects.landscape');
});
Route::get('/projects/fitout/', function () {
    return view('projects.fitout');
});
Route::get('/contact/', function () {
    return view('contact');
});
