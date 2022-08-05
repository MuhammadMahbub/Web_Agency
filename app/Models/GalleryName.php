<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryName extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function get_gallery()
    {
        return $this->hasMany(Gallery::class, 'gallery_name_id', 'id');
    }
}
