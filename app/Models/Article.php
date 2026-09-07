<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'cover_image',
        'published_at',
    ];
    protected $casts = [
        'published_at' => 'datetime',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($article) {
            $article->slug = static::generateUniqueSlug($article->title);
        });

        static::updating(function ($article) {
            // On régénère seulement si le titre a changé
            if ($article->isDirty('title')) {
                $article->slug = static::generateUniqueSlug($article->title, $article->id);
            }
        });
    }

    protected static function generateUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 2;

        $query = static::where('slug', $slug);
        if ($ignoreId) {
            $query->where('id', '!=', $ignoreId);
        }

        while ($query->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;

            $query = static::where('slug', $slug);
            if ($ignoreId) {
                $query->where('id', '!=', $ignoreId);
            }
        }

        return $slug;
    }
}
