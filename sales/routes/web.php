<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Home;

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
    return view('welcome');
});
Route::get('/{name}/{age}', function ($name,$age) {
    echo 'welcome ' . $name . ' Your age is '.$age;
 });
 Route::get('/az', [Home::class, 'index']);
