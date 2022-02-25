<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', function () {
    return view('todos');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/board', function () {
    return view('board');
});

Route::get('/admin', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/users', [UserController::class, 'index'])->middleware('auth');


Route::get('/db-test', function () {
    return view('db_test');
})->middleware('auth');

Route::get('/db-migrate', function () {
    Artisan::call('migrate');
});
