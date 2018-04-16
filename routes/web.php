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

Route::get('pwd/reset?token={token}', function () {
    return view('password.reset');
})->name('pwd.reset');

Route::get('pwd/reset/complete', function () {
    return view('password.complete');
})->name('pwd.reset.done');

Route::get('invitation/project', function () {
    return view('invitations.accept-project');
})->name('invitation.project');

Route::get('invitation/team', function () {
    return view('invitations.accept-team');
})->name('invitation.team');