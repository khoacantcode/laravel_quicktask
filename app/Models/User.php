<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class User extends Model
{
    protected $table = 'users';
    protected $primary_key = 'id';
    protected $guarded = [];

    public function posts()
    {
        return $this->hasMany(Post::class, "post_author");
    }
}
