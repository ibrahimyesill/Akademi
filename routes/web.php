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
    return view('Frontend/Home/index');
});
Route::prefix('conferences')->group(function () {
    Route::get('/', function () {
        return view('Frontend.Pages.Conferences.conferences');
    });
    Route::get('/details', function () {
        return view('Frontend.Pages.Conferences.conference-detail');
    });
});

Route::get('/magazines', function () {
    return view('Frontend.Pages.Magazines.magazines');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

