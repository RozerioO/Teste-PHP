<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    protected $fillable = ['title','subtitle','text','category_id','user_id'];

    public function user()
    {
        return $this-> hasOne(User::class,'id', 'user_id');
    }

    public function category()
    {
        return $this-> hasOne(Category::class,'id','category_id');
    }
}
