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
    return view('welcome');
});

Route::get('test', function () {
    return view('test');
});

Route::namespace ('App\Http\Controllers')->prefix('test')->group(function () {
    Route::get('/', 'TestController@index');
    Route::get('create', 'TestController@create');
    Route::post('/', ['as' => 'test.store', 'uses' => 'TestController@store']);
    Route::get('{user_id}/{date}', 'TestController@show');
    Route::get('{user_id}/{date}/edit', 'TestController@edit');
    Route::put('{user_id}/{date}', 'TestController@update');
    Route::delete('{user_id}/{date}', 'TestController@destroy');
    Route::get('redirect', function () {
        return redirect('index');});
});

// Route::get('test', 'App\Http\Livewire\FortuneComponent@render');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::namespace ('App\Http\Controllers')->prefix('diary')->group(function () {
    Route::get('/', 'DiaryController@index');
    Route::get('create', 'DiaryController@create');
    Route::post('/', ['as' => 'diary.store', 'uses' => 'DiaryController@store']);
    Route::get('{user_id}/{date}', 'DiaryController@show');
    Route::get('{user_id}/{date}/edit', 'DiaryController@edit');
    Route::put('{user_id}/{date}', 'DiaryController@update');
    Route::delete('{user_id}/{date}', 'DiaryController@destroy');
    Route::get('redirect', function () {
        return redirect('index');});
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});