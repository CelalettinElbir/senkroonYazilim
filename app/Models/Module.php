<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Module extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'content',
        'category',
        'icon',
        'cover_image',
        'meta_title',
        'meta_description',
        'is_active',
        'order',
    ];

    /**
     * Slug otomatik üretim
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($module) {
            if (empty($module->slug)) {
                $module->slug = Str::slug($module->title);
            }
        });
    }


    public function getCoverImageUrlAttribute()
    {
        return $this->cover_image
            ? Storage::url($this->cover_image)
            : null;
    }

    /**
     * Route Model Binding için
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
