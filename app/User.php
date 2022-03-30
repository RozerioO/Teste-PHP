<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;


class User extends Model implements Authenticatable
{


    public $timestamps = false;
    protected $fillable = ['name','email','password'];

    public function post()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
    }

    public function getAuthIdentifierName()
    {
        // TODO: Implement getAuthIdentifierName() method.
    }

    public function getAuthIdentifier()
    {
        // TODO: Implement getAuthIdentifier() method.
    }

    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
    }

    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
    }

    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
    }
}
