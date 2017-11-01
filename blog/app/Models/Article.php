<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{

    use SoftDeletes;

    //
    // 批量赋值白名单
    protected $fillable = [
        'subject', 'cover', 'summary', 'content', 'status', 'category_id'
    ];


    /**
     * 获取分类
     */
    public function category()
    {
        return $this->belongsTo(Category::class);// 'App\\Models\\Category'
    }
}
