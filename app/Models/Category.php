<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
//все новости категории
    public function newsCategory():HasMany
    {
        return $this->hasMany(News::class,'fk_category_id','id');
    }




    protected $table="categories";
    public static $avaribel=[
        'id','Title','discription'
    ];
    protected $fillable = ['fk_categori_id','Title','Avtor','Status','Descriptoin'];//поля которые хотим заполнять лучше его использовать
    protected $guarded =['id'];//поля которые не нужно обновлять

    public function getCategori():array
    {
        return DB::select("SELECT id,title,discription FROM ($this->table)");
    }
}