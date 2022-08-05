<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function get_service()
    {
        return $this->hasOne(Service::class, 'id', 'service_id');
    }
}
