<?php

use App\Http\Controllers\OwnerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

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
    return view('home',[
        'title' => 'HOME',
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        'title' => 'Contact'
    ]);
});

Route::resource('storelist', StoreController::class);

Route::resource('ownerlist', OwnerController::class);