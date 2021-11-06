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

Route::redirect('/', '/patients');

Route::name('app.')->group(function() {
    Route::name('patients.')->prefix('/patients')->group(function() {
        Route::get('/', Pages\Patients::class)->name('index');
        Route::get('/new', Pages\Patients\Form::class)->name('new');
    });
});
