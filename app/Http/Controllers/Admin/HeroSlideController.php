<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSlide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HeroSlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slides = HeroSlide::orderBy('sort_order', 'asc')
            ->orderBy('id', 'asc')
            ->paginate(15);

        return view('admin.hero-slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hero-slides.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'required|string',
            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'badge_icon' => 'required|string|max:255',
            'badge_text' => 'required|string|max:255',
            'primary_button_text' => 'required|string|max:255',
            'primary_button_url' => 'required|string|max:255',
            'primary_button_icon' => 'required|string|max:255',
            'secondary_button_text' => 'required|string|max:255',
            'secondary_button_url' => 'required|string|max:255',
            'secondary_button_icon' => 'required|string|max:255',
            'sort_order' => 'required|integer|min:0',
            'is_active' => 'nullable|boolean',
            'stats' => 'nullable|array',
            'stats.*.number' => 'nullable|string|max:50',
            'stats.*.label' => 'nullable|string|max:100',
            'features' => 'nullable|array',
            'features.*.icon' => 'nullable|string|max:255',
            'features.*.text' => 'nullable|string|max:255',
            'testimonial.text' => 'nullable|string',
            'testimonial.author_name' => 'nullable|string|max:255',
            'testimonial.author_title' => 'nullable|string|max:255',
            'testimonial.author_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:1024'
        ]);

        $data = $request->all();

        // Handle background image upload
        if ($request->hasFile('background_image')) {
            $backgroundImage = $request->file('background_image');
            $backgroundImageName = time() . '_bg_' . Str::random(10) . '.' . $backgroundImage->getClientOriginalExtension();
            
            $stored = $backgroundImage->storeAs('hero_slides', $backgroundImageName, 'public');
            
            if ($stored) {
                $data['background_image'] = $backgroundImageName;
            } else {
                return redirect()->back()
                    ->withErrors(['background_image' => 'Failed to upload background image. Please try again.'])
                    ->withInput();
            }
        }

        // Handle hero image upload
        if ($request->hasFile('hero_image')) {
            $heroImage = $request->file('hero_image');
            $heroImageName = time() . '_hero_' . Str::random(10) . '.' . $heroImage->getClientOriginalExtension();
            
            $stored = $heroImage->storeAs('hero_slides', $heroImageName, 'public');
            
            if ($stored) {
                $data['hero_image'] = $heroImageName;
            } else {
                return redirect()->back()
                    ->withErrors(['hero_image' => 'Failed to upload hero image. Please try again.'])
                    ->withInput();
            }
        }

        // Process stats
        if ($request->has('stats')) {
            $stats = [];
            foreach ($request->stats as $stat) {
                if (!empty($stat['number']) && !empty($stat['label'])) {
                    $stats[] = [
                        'number' => $stat['number'],
                        'label' => $stat['label']
                    ];
                }
            }
            $data['stats'] = $stats;
        }

        // Process features
        if ($request->has('features')) {
            $features = [];
            foreach ($request->features as $feature) {
                if (!empty($feature['text'])) {
                    $features[] = [
                        'icon' => $feature['icon'] ?? 'fas fa-check-circle',
                        'text' => $feature['text']
                    ];
                }
            }
            $data['features'] = $features;
        }

        // Process testimonial
        if ($request->has('testimonial')) {
            $testimonial = $request->testimonial;
            if (!empty($testimonial['text'])) {
                $testimonialData = [
                    'text' => $testimonial['text'],
                    'author_name' => $testimonial['author_name'] ?? '',
                    'author_title' => $testimonial['author_title'] ?? '',
                    'author_image' => ''
                ];

                // Handle testimonial author image
                if ($request->hasFile('testimonial.author_image')) {
                    $authorImage = $request->file('testimonial.author_image');
                    $authorImageName = time() . '_author_' . Str::random(10) . '.' . $authorImage->getClientOriginalExtension();
                    
                    $stored = $authorImage->storeAs('hero_slides', $authorImageName, 'public');
                    
                    if ($stored) {
                        $testimonialData['author_image'] = $authorImageName;
                    }
                }

                $data['testimonial'] = $testimonialData;
            }
        }

        $data['is_active'] = (bool) $request->input('is_active', 0);

        HeroSlide::create($data);

        return redirect()->route('hero-slides.index')
            ->with('success', 'Hero slide created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(HeroSlide $heroSlide)
    {
        return view('admin.hero-slides.show', compact('heroSlide'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HeroSlide $heroSlide)
    {
        return view('admin.hero-slides.edit', compact('heroSlide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HeroSlide $heroSlide)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'required|string',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'badge_icon' => 'required|string|max:255',
            'badge_text' => 'required|string|max:255',
            'primary_button_text' => 'required|string|max:255',
            'primary_button_url' => 'required|string|max:255',
            'primary_button_icon' => 'required|string|max:255',
            'secondary_button_text' => 'required|string|max:255',
            'secondary_button_url' => 'required|string|max:255',
            'secondary_button_icon' => 'required|string|max:255',
            'sort_order' => 'required|integer|min:0',
            'is_active' => 'nullable|boolean',
            'stats' => 'nullable|array',
            'stats.*.number' => 'nullable|string|max:50',
            'stats.*.label' => 'nullable|string|max:100',
            'features' => 'nullable|array',
            'features.*.icon' => 'nullable|string|max:255',
            'features.*.text' => 'nullable|string|max:255',
            'testimonial.text' => 'nullable|string',
            'testimonial.author_name' => 'nullable|string|max:255',
            'testimonial.author_title' => 'nullable|string|max:255',
            'testimonial.author_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:1024'
        ]);

        $data = $request->all();

        // Handle background image upload
        if ($request->hasFile('background_image')) {
            $backgroundImage = $request->file('background_image');
            $backgroundImageName = time() . '_bg_' . Str::random(10) . '.' . $backgroundImage->getClientOriginalExtension();
            
            $stored = $backgroundImage->storeAs('hero_slides', $backgroundImageName, 'public');
            
            if ($stored) {
                // Delete old background image
                if ($heroSlide->background_image) {
                    Storage::disk('public')->delete('hero_slides/' . $heroSlide->background_image);
                }
                $data['background_image'] = $backgroundImageName;
            } else {
                return redirect()->back()
                    ->withErrors(['background_image' => 'Failed to upload background image. Please try again.'])
                    ->withInput();
            }
        }

        // Handle hero image upload
        if ($request->hasFile('hero_image')) {
            $heroImage = $request->file('hero_image');
            $heroImageName = time() . '_hero_' . Str::random(10) . '.' . $heroImage->getClientOriginalExtension();
            
            $stored = $heroImage->storeAs('hero_slides', $heroImageName, 'public');
            
            if ($stored) {
                // Delete old hero image
                if ($heroSlide->hero_image) {
                    Storage::disk('public')->delete('hero_slides/' . $heroSlide->hero_image);
                }
                $data['hero_image'] = $heroImageName;
            } else {
                return redirect()->back()
                    ->withErrors(['hero_image' => 'Failed to upload hero image. Please try again.'])
                    ->withInput();
            }
        }

        // Process stats
        if ($request->has('stats')) {
            $stats = [];
            foreach ($request->stats as $stat) {
                if (!empty($stat['number']) && !empty($stat['label'])) {
                    $stats[] = [
                        'number' => $stat['number'],
                        'label' => $stat['label']
                    ];
                }
            }
            $data['stats'] = $stats;
        }

        // Process features
        if ($request->has('features')) {
            $features = [];
            foreach ($request->features as $feature) {
                if (!empty($feature['text'])) {
                    $features[] = [
                        'icon' => $feature['icon'] ?? 'fas fa-check-circle',
                        'text' => $feature['text']
                    ];
                }
            }
            $data['features'] = $features;
        }

        // Process testimonial
        if ($request->has('testimonial')) {
            $testimonial = $request->testimonial;
            if (!empty($testimonial['text'])) {
                $testimonialData = [
                    'text' => $testimonial['text'],
                    'author_name' => $testimonial['author_name'] ?? '',
                    'author_title' => $testimonial['author_title'] ?? '',
                    'author_image' => $heroSlide->testimonial['author_image'] ?? ''
                ];

                // Handle testimonial author image
                if ($request->hasFile('testimonial.author_image')) {
                    $authorImage = $request->file('testimonial.author_image');
                    $authorImageName = time() . '_author_' . Str::random(10) . '.' . $authorImage->getClientOriginalExtension();
                    
                    $stored = $authorImage->storeAs('hero_slides', $authorImageName, 'public');
                    
                    if ($stored) {
                        // Delete old author image
                        if (!empty($heroSlide->testimonial['author_image'])) {
                            Storage::disk('public')->delete('hero_slides/' . $heroSlide->testimonial['author_image']);
                        }
                        $testimonialData['author_image'] = $authorImageName;
                    }
                }

                $data['testimonial'] = $testimonialData;
            }
        }

        $data['is_active'] = (bool) $request->input('is_active', 0);

        $heroSlide->update($data);

        return redirect()->route('hero-slides.index')
            ->with('success', 'Hero slide updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeroSlide $heroSlide)
    {
        // Delete background image file
        if ($heroSlide->background_image) {
            Storage::disk('public')->delete('hero_slides/' . $heroSlide->background_image);
        }

        // Delete hero image file
        if ($heroSlide->hero_image) {
            Storage::disk('public')->delete('hero_slides/' . $heroSlide->hero_image);
        }

        // Delete testimonial author image
        if ($heroSlide->testimonial && !empty($heroSlide->testimonial['author_image'])) {
            Storage::disk('public')->delete('hero_slides/' . $heroSlide->testimonial['author_image']);
        }

        $heroSlide->delete();

        return redirect()->route('hero-slides.index')
            ->with('success', 'Hero slide deleted successfully.');
    }

    /**
     * Toggle the status of the slide
     */
    public function toggleStatus(HeroSlide $heroSlide)
    {
        $heroSlide->update([
            'is_active' => !$heroSlide->is_active
        ]);

        return response()->json([
            'success' => true,
            'is_active' => $heroSlide->is_active,
            'message' => 'Status updated successfully.'
        ]);
    }

    /**
     * Update the order of slides
     */
    public function updateOrder(Request $request)
    {
        $request->validate([
            'slides' => 'required|array',
            'slides.*.id' => 'required|exists:hero_slides,id',
            'slides.*.sort_order' => 'required|integer|min:0'
        ]);

        foreach ($request->slides as $slideData) {
            HeroSlide::where('id', $slideData['id'])
                ->update(['sort_order' => $slideData['sort_order']]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Order updated successfully.'
        ]);
    }
} 