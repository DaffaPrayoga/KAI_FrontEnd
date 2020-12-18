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
Route::get('/org_chart', function () {
    return view('org_chart');
});
Route::get('/family_tree', function () {
    return view('family_tree');
});
Route::get('/9_box', function () {
    return view('9_box');
});
Route::get('/profile', function () {
    return view('employee_profile');
});
