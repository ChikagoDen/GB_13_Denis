<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $model=new Category();
        $news=$model->getCategori();
        return view($view = 'news/category', ['news'=>$news]);
    }

    public function CategoryShow(string $category)
    {
        
        $model=new News();
        $news=$model->getNews($category);
// dd( $news);
        return view($view = 'news/categoryShow', ['news'=>$news, 'category'=>$category]);
    }
}
