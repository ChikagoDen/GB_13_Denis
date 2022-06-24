<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['fk_categori_id','Title','Avtor','Status','Descriptoin','DescriptoinCorotco'];
    protected $table="news";

    public function categoryNews():BelongsTo
    {
        return $this->belongsTo(Category::class,'fk_categori_id','id');
    }
}
