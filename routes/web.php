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

Route::get('/sait', function () {
    return view('sait');
});
Route::get('/page2', function () {
    return view('page2');
});
Route::get('/cs', function () {
    return view('cs');
});
Route::get('/cup', function () {
    return view('cup');
});
Route::get('/wow', function () {
    return view('wow');
});
Route::get('/kor', function () {
    return view('kor');
});
Route::get('/for', function () {
    return view('for');
});
Route::get('/page3', function () {
    return view('page3');
});
Route::get('/page4', function () {
    return view('page4');
});
Route::get('/page5', function () {
    return view('page5');
});
Route::get('/page6', function () {
    return view('page6');
});
Route::get('/page7', function () {
    return view('page7');
});
Route::get('/page8', function () {
    return view('page8');
});
Route::get('/Прлобник', function () {
    return view('Прлобник');
});
Route::get('/we', function () {
    return view('we');
});
Route::get('/client', function () {
    return view('client');
});
Route::get('/podarki', function () {
    return view('podarki');
});
Route::get('/Novinki', function () {
    return view('Novinki');
});