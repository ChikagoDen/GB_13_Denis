<?php

use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StartController;
use App\Http\Controllers\AutorizeController;

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

Route::get('admin/news/createNews',[AdminNewsController::class, 'createNews'])->name($name = 'admin.news.createNews');
Route::get('admin/news/{category}', [AdminNewsController::class, 'categoryShow'])->name($name = 'admin.news.categoryShow');

Route::group(['prefix'=>"admin", "as"=>'admin.'], function ()
{
    Route::resource('/news', AdminNewsController::class);
    Route::resource('/category', AdminCategoryController::class);
});
 



Route::get('/index',[StartController::class, 'index'])->name($name = 'news.index');

Route::get('/autorize',[AutorizeController::class, 'index'])->name($name = 'news.autorize');

Route::get('/category',[CategoryController::class, 'index'])->name($name = 'news.category');

Route::get('/category/{category}', [CategoryController::class, 'categoryShow'])->name($name = 'news.categoryShow');

Route::get('/category/action/{id}', [NewsController::class, 'show'])
->where($name = 'id', $expression='\d+')
->name($name = 'news.show');