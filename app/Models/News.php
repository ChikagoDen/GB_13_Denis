<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table="news";
    public function getNews($category)
    {
        return  DB::table("categories")
        ->join('news',"news.fk_categori_id","=","categories.id")
        ->select('categories.*' , 'news.*')
        // ->where('title','=' ,$category)
        ->where('categories.title','=' ,$category.'.')
        ->get();

    }

    // public function getNews():array
    // {
    //     return DB::table($this->table)
    //         ->select(["id", "title", "discription", "discriptioncorotco", "avtor", "status", "image", "fk_categori_id"])
    //         ->get()
    //         ->toArray();
    // }
    // то же
    // public function getNews():array
    // {
    //     return DB::select("SELECT id,title,discription,discriptioncorotco,
    //                         avtor, status, image,fk_categori_id FROM ($this->table)");
    // }
    


    public function getNewsById(int $id)
    {
        return DB::table($this->table)->find($id);
    } 
    //то же
    //    public function getNewsById(int $id)
    // {
    //     return DB::selectOne("SELECT * FROM ($this->table) WHERE id = :id",  ["id"=>$id]);
    // }
}
