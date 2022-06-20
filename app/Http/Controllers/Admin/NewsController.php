<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    } 
    public function CategoryShow(string $category)
    {
        // $model=new News();
        // $news=$model->getNews($category);
    
        $temp=Category::query()->select('id')->where('Title',$category.'.')->get();
         foreach ($temp as $newss) {
          
          } 
        $news=News::query()->select()
        ->where('fk_categori_id','=',$newss->id)
        // ->get();
        // ->toSql(); dd($news);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $request->validate(['Title'=>['required','string','min:5']]);
        // $data=$request->all();

        $data=$request->only(['fk_categori_id','Title','Avtor','Status','Descriptoin']);
        $created=News::create($data);
        if($created){
            return redirect()->route('admin.category.index')
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
    // public function update(Request $request, $id)
    // {
    //     //
    // }
    public function update(Request $request,News $news)
    {
        // $request->only(['fk_categori_id','Title','Avtor','Status','Descriptoin']);
        // $news->Title='blabla';
        // dd($news);
        $newsUpdate=$news->fill($request->only(['fk_categori_id','Title','Avtor','Status','Descriptoin']))->save();
        if($newsUpdate){
            return redirect()->route('admin.category.index')
            ->with('success','Запись успешно отредактирована');
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
