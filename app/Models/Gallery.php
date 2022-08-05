<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function relationtoname()
    {
        return $this->belongsTo(GalleryName::class, 'gallery_name_id', 'id');
    }
}
