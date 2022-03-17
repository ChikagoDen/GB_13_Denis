<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    public function createNews()
    {
        return view($view = 'admin/news/createNews');
    }
    public function CategoryShow(string $category)
    {
        $news = $this->getNewsCategoryHistory($category);
        return view($view = 'admin/news/news', ['news'=>$news, 'category'=>$category]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // dd($request->only('name',"avtor"));
        // dd($request->except('name',"avtor"));
        // dd($request->input("avtor"));
        // dd($request->input("avtor2","net tacogo"));
        // dd($request->has("avtor2"));
        // dd($request->query());
        $data = $request->except('_token');
        file_put_contents(public_path('fileJson/data.json'),$data); //public/fileJson/..
        Storage::put('fileJson2/data.json', $data); //storage/app/fileJson2/..
        return $data;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
}
