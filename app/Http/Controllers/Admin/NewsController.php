<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\CreateRequest;
use App\Http\Requests\News\EditRequest;
use App\Models\Category;
use App\Models\News;
// // use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Validation\ValidationException;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Category $category)
    {
        $news=News::with('categoryNews')
        ->select()
        ->where('fk_categori_id','=',$category->id)
        ->paginate(2);
        return view($view = 'admin/news/news', ['news'=>$news, 'category'=>$category]);
    } 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $category=Category::all();
        return view('admin.news.createNews',['category'=> $category]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CreateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        $created=News::create($data);
        if($created){
            return redirect()->route('admin.index')
            ->with('success','Запись успешно добавлена');
        }
        return  back()->with('error','неполучилось')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param  News $news
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }
    public function edit(News $news)
    {
        return view('admin.news.edit',['news'=>$news]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  News  $news
     * @return \Illuminate\Http\Response
     */

    public function update( EditRequest $request,News $news)
    {
        $newsUpdate=$news->fill($request->only(['fk_categori_id','Title','Avtor','Status','Discription','DiscriptionCorotco']))->save();
        if($newsUpdate){
            return redirect()->route('admin.index')
            ->with('success','Запись успешно отредактирована');
        }
        return  back()->with('error','неполучилось')->withInput();
    }
    public function delete(News $id)
    {
        $id->delete();
        if($id){
            return redirect()->route('admin.index')
            ->with('success','Запись успешно удалена');
        }
        return  back()->with('error','неполучилось')->withInput();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
