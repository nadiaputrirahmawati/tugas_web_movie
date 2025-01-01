<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});
// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });

Route::get('admin/dashboard', [DashboardController::class, 'index']);
Route::get('admin/movie/{id}', [MovieController::class, 'detail']);

Route::resource('genre', GenreController::class);
Route::resource('movie', MovieController::class);