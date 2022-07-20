<?php

namespace App\Http\Controllers;

use App\Models\Category;
// use App\Models\News;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        $categorys=Category::with('newsCategory')->paginate(5);
        return view("news/category", ['categorys'=>$categorys]);
    }
}
