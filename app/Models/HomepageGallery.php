<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class HomepageGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'icon',
        'image',
        'url',
        'badge_text',
        'badge_type',
        'category_type',
        'color_scheme',
        'sort_order',
        'is_active',
        'stats'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'stats' => 'array',
        'sort_order' => 'integer'
    ];

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('category_type', 'featured');
    }

    public function scopeRegular($query)
    {
        return $query->where('category_type', 'regular');
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc')->orderBy('name', 'asc');
    }

    // Accessors
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/homepage_galleries/' . $this->image);
        }
        return asset('images/default-category.jpg');
    }

    public function getFullUrlAttribute()
    {
        if ($this->url) {
            return $this->url;
        }
        return route('homepage-gallery.show', $this->slug);
    }

    public function getColorSchemeDataAttribute()
    {
        $schemes = [
            'popular' => ['bg' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)', 'text' => '#ffffff'],
            'featured' => ['bg' => 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)', 'text' => '#ffffff'],
            'active' => ['bg' => 'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)', 'text' => '#ffffff'],
            'new' => ['bg' => 'linear-gradient(135deg, #43e97b 0%, #38f9d7 100%)', 'text' => '#ffffff'],
            'free' => ['bg' => 'linear-gradient(135deg, #fa709a 0%, #fee140 100%)', 'text' => '#ffffff'],
            'others' => ['bg' => 'linear-gradient(135deg, #a8edea 0%, #fed6e3 100%)', 'text' => '#333333'],
            'default' => ['bg' => 'linear-gradient(135deg, #d299c2 0%, #fef9d7 100%)', 'text' => '#333333']
        ];

        return $schemes[$this->color_scheme] ?? $schemes['default'];
    }

    public function getBadgeClassAttribute()
    {
        $classes = [
            'default' => 'badge-default',
            'new' => 'badge-new',
            'free' => 'badge-free',
            'premium' => 'badge-premium',
            'hot' => 'badge-hot'
        ];

        return $classes[$this->badge_type] ?? $classes['default'];
    }

    // Mutators
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        if (empty($this->attributes['slug'])) {
            $this->attributes['slug'] = Str::slug($value);
        }
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    // Boot method for auto-generating slug
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($gallery) {
            if (empty($gallery->slug)) {
                $gallery->slug = Str::slug($gallery->name);
            }
        });
    }
}
