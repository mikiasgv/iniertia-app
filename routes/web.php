<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'foo' => 'bar',
    ]);
});

Route::get('/about', function () {
    return Inertia::render('About', [
        'foo' => 'bar',
    ]);
});

Route::get('/contact', function () {
    return Inertia::render('Contact', [
        'foo' => 'bar',
    ]);
});

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('/users', [UserController::class, 'store'])->name('user.store');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::patch('/users/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('user.destroy');
