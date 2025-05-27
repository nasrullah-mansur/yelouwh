<?php

namespace App\Http\Controllers;

use App\Models\HomepageGallery;
use Illuminate\Http\Request;

class HomepageGalleryController extends Controller
{
    /**
     * Get galleries for homepage display
     */
    public function getHomepageGalleries()
    {
        return HomepageGallery::active()
            ->ordered()
            ->get();
    }

    /**
     * Display the specified gallery
     */
    public function show($slug)
    {
        $gallery = HomepageGallery::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('homepage-gallery.show', compact('gallery'));
    }

    /**
     * API endpoint for galleries
     */
    public function apiIndex()
    {
        $galleries = HomepageGallery::active()
            ->ordered()
            ->get();

        return response()->json([
            'success' => true,
            'data' => $galleries
        ]);
    }
}
