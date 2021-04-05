<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;
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
    return view('index');
});

Route::get('post/create', function () {
    DB::table("post")->insert([
        'title' => 'thisistitle',
        'body' => 'thisisbody', 
    ]);
});
Route::get('post', [BlogController::class,"index"]);
Route::get('post/create2', function() {
    return view('blog.index'); 
});
Route::post('blog/index',[BlogController::class,'store'])->name('add-blog');
Route::get('post/{id}',[BlogController::class,'get_client']);
Route::get('/form','App\Http\Controllers\FormController@index');
Route::post('/form','App\Http\Controllers\FormController@store')->name('addImage');