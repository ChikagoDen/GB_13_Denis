<?php

use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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

Route::group(['prefix'=>"admin", "as"=>'admin.'], function ()
{
    Route::resource($name = '/news',$controller = AdminNewsController::class);
    Route::resource($name = '/category',$controller = AdminCategoryController::class);
});

// Route::resource($name = 'admin/news',$controller = AdminNewsController::class);
// Route::resource($name = 'admin/category',$controller = AdminCategoryController::class);



Route::get('/hello/{name}', fn(string $name) => "Приветствуем тебя , {$name}");
Route::get('/info/{inform}', fn(string $inform) => "<h2>Информация о сайте<h2> ,<br> {$inform}");
Route::get('/news', [NewsController::class, 'index'])->name($name = 'news.index');
Route::get('/news/action/{id}', [NewsController::class, 'show'])
->where($name = 'id', $expression='\d+')
->name($name = 'news.show');