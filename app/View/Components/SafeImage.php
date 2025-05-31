<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Helper;

class SafeImage extends Component
{
    public $src;
    public $alt;
    public $fallback;
    public $class;
    public $attributes;

    public function __construct($src = null, $alt = '', $fallback = null, $class = '', $attributes = [])
    {
        $this->src = $this->getSafeImageUrl($src);
        $this->alt = $alt;
        $this->fallback = $fallback ?: asset('public/img/default.jpg');
        $this->class = $class;
        $this->attributes = $attributes;
    }

    private function getSafeImageUrl($path)
    {
        if (empty($path)) {
            return $this->fallback ?: asset('public/img/default.jpg');
        }

        // If it's already a full URL, return as is
        if (filter_var($path, FILTER_VALIDATE_URL)) {
            return $path;
        }

        // Try multiple possible locations for the image
        $possiblePaths = [
            public_path($path),
            public_path('public/' . $path),
            storage_path('app/public/' . $path),
            public_path('uploads/' . basename($path)), // For direct filename matches
        ];

        $possibleUrls = [
            asset($path),
            asset('public/' . $path),
            asset('storage/' . $path),
            asset('uploads/' . basename($path)),
        ];

        // Check if file exists in any of the possible locations
        foreach ($possiblePaths as $index => $filePath) {
            if (file_exists($filePath)) {
                return $possibleUrls[$index];
            }
        }

        // Try using Helper::getFile as fallback
        try {
            $helperUrl = Helper::getFile($path);
            // Basic validation of the URL
            if (!empty($helperUrl) && $helperUrl !== $path) {
                return $helperUrl;
            }
        } catch (\Exception $e) {
            // Continue to default fallback
        }

        // Return fallback image
        return $this->fallback ?: asset('public/img/default.jpg');
    }

    public function render()
    {
        return view('components.safe-image');
    }
} 