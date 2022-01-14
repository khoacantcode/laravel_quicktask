<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class Post extends Model
{
    protected $table = 'post';
    protected $primary_key = 'id';
    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(User::class, "post_author");
    }
    public function category()
    {
        return $this->belongsTo(CategoryUser::class, "post_cate");
    }
}
