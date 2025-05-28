<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class HeroSlide extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'background_image',
        'hero_image',
        'badge_icon',
        'badge_text',
        'primary_button_text',
        'primary_button_url',
        'primary_button_icon',
        'secondary_button_text',
        'secondary_button_url',
        'secondary_button_icon',
        'stats',
        'features',
        'testimonial',
        'sort_order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'stats' => 'array',
        'features' => 'array',
        'testimonial' => 'array',
        'sort_order' => 'integer'
    ];

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc')->orderBy('id', 'asc');
    }

    // Accessors
    public function getBackgroundImageUrlAttribute()
    {
        if ($this->background_image) {
            return asset('storage/hero_slides/' . $this->background_image);
        }
        return asset('public/new_home_page/banner.jpg');
    }

    public function getHeroImageUrlAttribute()
    {
        if ($this->hero_image) {
            return asset('storage/hero_slides/' . $this->hero_image);
        }
        return asset('public/new_home_page/3man.png');
    }

    // Helper methods
    public function hasStats()
    {
        return !empty($this->stats) && is_array($this->stats);
    }

    public function hasFeatures()
    {
        return !empty($this->features) && is_array($this->features);
    }

    public function hasTestimonial()
    {
        return !empty($this->testimonial) && is_array($this->testimonial);
    }
} 