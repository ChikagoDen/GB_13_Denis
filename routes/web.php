<?php

use App\Http\Controllers\Account\IndexController as AccountController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StartController;
use App\Http\Controllers\AutorizeController;
use Illuminate\Support\Facades\Auth;

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
Route::group(['middleware'=>'auth'],function(){

    Route::get('/index',AccountController::class)->name('account');

    Route::get('/logout',function(){
        Auth::logout();
        return redirect()->route('news.index');
    })->name('account.logout');

    Route :: get ( 'admin/news/createNews' , [ AdminNewsController ::class, 'create' ])->middleware('admin')-> name ( $name = 'admin.news.createNews' );
    Route :: get ( 'admin/news/{id}/editNews' , [ AdminNewsController ::class, 'edit' ])->middleware('admin')-> name ( $name = 'admin.news.edit' );
    Route :: get ( 'admin/news/{category}' , [ AdminNewsController ::class, 'index' ])->middleware('admin')-> name ( $name = 'admin.news.categoryShow' );
    Route :: get ( 'admin/news/{id}/deleteNews' , [ AdminNewsController ::class, 'delete' ])->middleware('admin')-> name ( $name = 'admin.news.delete' );

    
    Route :: get ( 'admin/category/{id}/deleteCategory' , [ AdminCategoryController ::class, 'delete' ])->middleware('admin')-> name ( $name = 'admin.category.delete' );
    Route :: get ( 'admin/category/create' , [ AdminCategoryController ::class,'create'])->middleware('admin')-> name ( $name = 'admin.category.createCategory' );
    Route :: post ( 'admin/category/createCategory' , [ AdminCategoryController ::class, 'store' ])->middleware('admin')-> name ( $name = 'admin.category.store' );


    Route :: get ( 'admin/category' , [ AdminCategoryController :: class, 'index' ])->middleware('admin')-> name ( $name = 'admin.index' );


    Route::put('/profile/{user}',[ProfileController::class,'updateProfile'])->name('updateProfile');
Route::get('/profile',[ProfileController::class,'index'])->name('sortProfile');
Route::get('/profile/{user}',[ProfileController::class,'edit'])->name('editProfile');

    Route :: group ([ 'prefix' => "admin" , "as" => 'admin.','middleware'=>'admin' ], function ()
    {
        
        

        Route :: resource ( '/news' , AdminNewsController ::class);
        // Route :: resource ( '/category' , AdminCategoryController :: class);
        
    });
});




// Route :: get ( '/' ,[ StartController ::class, 'index' ])-> name ( $name = 'news.index' );
Route :: get ( '/index' ,[ StartController ::class, 'index' ])-> name ( $name = 'news.index' );
Route :: get ( '/autorize' ,[ AutorizeController ::class, 'index' ])-> name ( $name = 'news.autorize' );
Route :: get ( '/category' ,[ CategoryController ::class, 'index' ])-> name ( $name = 'news.category' );
Route :: get ( '/category/{category}' , [ NewsController ::class, 'index' ])-> name ( $name = 'news.categoryShow' );
Route :: get ( '/news/{id}' , [ NewsController ::class, 'show' ])
                                                                ->where('id','\d+') //news -модель  должно быть числом
                                                                ->name ( $name = 'news.show' );
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

