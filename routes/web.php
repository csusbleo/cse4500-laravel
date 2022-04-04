<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;
use App\Http\Controllers\TodoController;
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

Route::get('/board', function () {
    return view('board');
});

Route::fallback(function () {
    return view('404');
});



Route::resource('/todos', TodoController::class);

Route::resource('/calendar', EventController::class);
Route::get('/events-feed',[EventController::class,'feed']);


Route::get('/class',function(){ return view('class.index'); });

