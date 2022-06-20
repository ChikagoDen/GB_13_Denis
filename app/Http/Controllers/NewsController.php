<?php declare (strict_types=1);

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;
use Illuminate\Database\Eloquent\Model;

class NewsController extends Controller
{
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
    public function show(int $id) {
        $news=News::findOrFail($id);
        return view($view = 'news/show', ['newsItem'=>$news]);
    }
    // не работает модель приходит пустая
    // public function show(News $news) {
    //     // dd($news);
    //     return view($view = 'news/show', ['newsItem'=>$news]);
    // }


}
