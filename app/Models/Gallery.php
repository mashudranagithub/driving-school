<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    protected $fillable = ['image_path', 'caption'];

    // Optional: Accessor for full image URL
    public function getImageUrlAttribute()
    {
        return Storage::url($this->image_path);
    }
}
