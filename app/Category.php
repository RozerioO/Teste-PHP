<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'id', 'category_id');
    }
}

