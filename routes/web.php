<?php

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

Route::get('password/reset', function () {
    return view('password.reset');
})->name('password.reset');

Route::get('password/reset/complete', function () {
    return view('password.complete');
})->name('password.reset.done');

Route::get('invitation/project', function () {
    return view('invitations.accept');
})->name('invitation.project');