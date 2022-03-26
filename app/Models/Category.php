<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table="categories";

    public function getCategori():array
    {
        return DB::select("SELECT id,title,discription FROM ($this->table)");
    }
}
