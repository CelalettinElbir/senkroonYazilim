<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Advisor extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'slug',

    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($advisor) {
            if (empty($advisor->slug)) {
                $advisor->slug = Str::slug($advisor->title);
            }
        });

        static::updating(function ($advisor) {
            // Her güncelleme sırasında slug'u yenile
            $advisor->slug = Str::slug($advisor->title);
        });
    }


      public function getImageUrlAttribute()
    {
        return $this->image
            ? Storage::url($this->image)
            : null;
    }

}
