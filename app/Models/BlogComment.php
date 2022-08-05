<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function relationtoblog()
    {
        return $this->hasOne(Blog::class, 'id', 'blog_id');
    }
}
