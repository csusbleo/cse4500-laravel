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

Route::get('/events-feed', function () {
    $data = array(
      array(
        'title' => "CSE4500 Class",
        'start' => "2022-02-23T17:30:00",
        'end' => "2022-02-23T18:45:00"
      ),
      array(
        'title' => "CSE4500 Class",
        'start' => "2022-02-28T17:30:00",
        'end' => "2022-02-28T18:45:00"
      )
    );
    return json_encode($data);
});

Route::fallback(function () {
    return view('404');
});








/*
Route::get('/admin', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/users', [UserController::class, 'index'])->middleware('auth');
*/

Route::get('/db-test', function () {
    return view('db_test');
});

Route::get('/db-migrate', function () {
    Artisan::call('migrate', [
       '--force' => true
    ]);
    echo Artisan::output();
});

Route::get('/db-rollback', function () {
    Artisan::call('migrate:rollback');
    echo Artisan::output();
});

Route::resource('/todos', TodoController::class);

Route::resource('/calendar', EventController::class);
Route::get('/events-feed',[EventController::class,'feed']);

Route::get('/class',function(){ return view('class.index'); });
