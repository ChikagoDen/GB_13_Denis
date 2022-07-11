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
Route :: get ( 'admin/news/createNews' , [ AdminNewsController ::class, 'create' ])-> name ( $name = 'admin.news.createNews' );
Route :: get ( 'admin/news/{id}/editNews' , [ AdminNewsController ::class, 'edit' ])-> name ( $name = 'admin.news.edit' );
Route :: get ( 'admin/news/{category}' , [ AdminNewsController ::class, 'index' ])-> name ( $name = 'admin.news.categoryShow' );
Route :: get ( 'admin/news/{id}/deleteNews' , [ AdminNewsController ::class, 'delete' ])-> name ( $name = 'admin.news.delete' );

Route :: get ( 'admin/category/{id}/deleteCategory' , [ AdminCategoryController ::class, 'delete' ])-> name ( $name = 'admin.category.delete' );

Route :: group ([ 'prefix' => "admin" , "as" => 'admin.' ], function ()
{
    Route :: resource ( '/news' , AdminNewsController ::class);
    Route :: resource ( '/category' , AdminCategoryController :: class);
});

Route :: get ( '/' ,[ StartController ::class, 'index' ])-> name ( $name = 'news.index' );
Route :: get ( '/index' ,[ StartController ::class, 'index' ])-> name ( $name = 'news.index' );
Route :: get ( '/autorize' ,[ AutorizeController ::class, 'index' ])-> name ( $name = 'news.autorize' );
Route :: get ( '/category' ,[ CategoryController ::class, 'index' ])-> name ( $name = 'news.category' );
Route :: get ( '/category/{category}' , [ NewsController ::class, 'index' ])-> name ( $name = 'news.categoryShow' );
Route :: get ( '/news/{id}' , [ NewsController ::class, 'show' ])
                                                                ->where('id','\d+') //news -модель  должно быть числом
                                                                ->name ( $name = 'news.show' );
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
