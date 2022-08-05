<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function relationtouser()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function relationtoblogcategory()
    {
        return $this->hasOne(BlogCategory::class, 'id', 'category_id');
    }

    // public function get_blog_comments()
    // {
    //     return $this->hasMany(BlogComment::class, 'blog_id', 'id');
    // }
}
