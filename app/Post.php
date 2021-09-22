<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title_post',
        'text',
        'photo',
        'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
