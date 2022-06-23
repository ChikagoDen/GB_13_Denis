<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $model=new Category();
    //     $news=$model->getCategori();
    //    return view("admin/news/index", ['news'=>$news]);
    // }
    public function index(){
        // $categorys=Category::query()->select(Category::$avaribel)->get();//Category::$avaribel из модели
        $categorys=Category::with('newsCategory')->paginate(5);
        return view("admin/news/index", ['categorys'=>$categorys]);
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->only(['Title','Descriptoin']);
        $created=Category::create($data);
        if($created){
            return redirect()->route('admin.category.index')
            ->with('success','Запись успешно добавлена');
        }

        return  back()->with('error','неполучилось')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  Category  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function delete(Category $id)
    {
        $category=Category::with('newsCategory')
        ->select()
        ->where('id','=',$id->id)
        ->delete();
        if($category){
            return redirect()->route('admin.category.index')
            ->with('success','Запись успешно удалена');
        }
        return  back()->with('error','неполучилось')->withInput();
    }
}
