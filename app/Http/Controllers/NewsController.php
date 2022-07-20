<?php declare (strict_types=1);

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
// use Illuminate\Http\Request;
// use phpDocumentor\Reflection\Types\This;
// use Illuminate\Database\Eloquent\Model;

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
        return view('news/show', ['news'=>$news]);
    }
}
