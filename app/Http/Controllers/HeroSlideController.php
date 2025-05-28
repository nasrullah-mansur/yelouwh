<?php

namespace App\Http\Controllers;

use App\Models\HeroSlide;
use Illuminate\Http\Request;

class HeroSlideController extends Controller
{
    /**
     * Get hero slides for homepage display
     */
    public function getHeroSlides()
    {
        return HeroSlide::active()
            ->ordered()
            ->get();
    }

    /**
     * API endpoint for hero slides
     */
    public function apiIndex()
    {
        $slides = HeroSlide::active()
            ->ordered()
            ->get();

        return response()->json([
            'success' => true,
            'data' => $slides
        ]);
    }
} 