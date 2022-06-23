<?php declare (strict_types=1);

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;
use Illuminate\Database\Eloquent\Model;

class NewsController extends Controller
{
    public function index(Category $category)
    {
        $news=News::with('categoryNews')
        ->select()
        ->where('fk_categori_id','=',$category->id)
        ->paginate(2);
        return view('news/categoryShow', ['news'=>$news, 'category'=>$category]);
    }    
    public function show(News $id) {
        $news=News::findOrFail($id->id);
        return view('news/show', ['newsItem'=>$news]);
    }
    // public function show(int $id)
    // {
    //     // if($id>5)
    //     //     {
    //     //         abort($code=404);
    //     //     }
    //     $model = new News();
    //     $news = $model->getNewsById($id);
    //     return view($view = 'news/show', ['newsItem'=>$news]);
    // }
    // public function show(int $id) {
    //     $news=News::findOrFail($id);
    //     return view($view = 'news/show', ['newsItem'=>$news]);
    // }
    // не работает модель приходит пустая
    // public function show(News $news) {
    //     return view($view = 'news/show', ['newsItem'=>$news]);
    // }


}
