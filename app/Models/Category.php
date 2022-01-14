<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Category extends Model
{
    protected $table = 'category';
    protected $primary_key = 'id';
    protected $guarded = [];

    public function posts()
    {
        return $this->hasMany(Post::class, "post_cate");
    }
}
