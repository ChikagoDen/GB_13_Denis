<?php declare (strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class NewsController extends Controller
{
    public function show(int $id)
    {
        if($id>5)
            {
                abort($code=404);
            }
        $news = $this->getNewsById($id);
        return view($view = 'news/show', ['newsItem'=>$news]);
    }
}
