<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        $news = $this->getNewsCategory();
        return view($view = 'news/category', ['news'=>$news]);
    }

    public function CategoryShow(string $category)
    {
        $news = $this->getNewsCategoryHistory($category);
        return view($view = 'news/categoryShow', ['news'=>$news, 'category'=>$category]);
    }
}
