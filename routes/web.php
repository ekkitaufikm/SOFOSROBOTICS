<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Detail;
use App\Http\Controllers\Home;
use App\Http\Controllers\User;
use App\Http\Controllers\Konten;
use App\Http\Controllers\Part;
use App\Http\Controllers\Auth\LoginController;

// landing page
Route::get('home', [Home::class, 'index']);

Route::get('detail1', [Detail::class, 'detail1']);
Route::get('detail2', [Detail::class, 'detail2']);

// admin
Route::get('dashboard', [Dashboard::class, 'index']);
Route::get('login', [LoginController::class, 'index']);

//  users
Route::get('users', [User::class, 'users']);
Route::get('tambahusers', [User::class, 'tambahusers']);
Route::get('role', [User::class, 'role']);
Route::get('tambahrole', [User::class, 'tambahrole']);

// master konten
Route::get('application', [Konten::class, 'application']);
Route::get('faq', [Konten::class, 'faq']);
Route::get('tambahfaq', [Konten::class, 'tambahfaq']);
Route::get('model', [Konten::class, 'model']);
Route::get('tambahmodel', [Konten::class, 'tambahmodel']);
Route::get('resources', [Konten::class, 'resources']);
Route::get('tambahresources', [Konten::class, 'tambahresources']);
Route::get('part', [Part::class, 'index']);
Route::get('detailpart1', [Part::class, 'detail1']);
Route::get('detailpart2', [Part::class, 'detail2']);
Route::get('detailpart3', [Part::class, 'detail3']);