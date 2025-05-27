<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomepageGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HomepageGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = HomepageGallery::orderBy('sort_order', 'asc')
            ->orderBy('name', 'asc')
            ->paginate(15);

        return view('admin.homepage-galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.homepage-galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:homepage_galleries,slug',
            'description' => 'nullable|string',
            'icon' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'url' => ['nullable', 'string', 'max:255', function ($attribute, $value, $fail) {
                if (!empty($value)) {
                    // Allow relative URLs (starting with /) or full URLs
                    if (!filter_var($value, FILTER_VALIDATE_URL) && !preg_match('/^\/[a-zA-Z0-9\-_\/]*$/', $value)) {
                        $fail('The ' . $attribute . ' must be a valid URL or relative path (e.g., /free or https://example.com).');
                    }
                }
            }],
            'badge_text' => 'nullable|string|max:50',
            'badge_type' => 'required|in:default,new,free,premium,hot',
            'category_type' => 'required|in:regular,featured',
            'color_scheme' => 'required|in:popular,featured,active,new,free,others,default',
            'sort_order' => 'required|integer|min:0',
            'is_active' => 'nullable|boolean',
            'stats' => 'nullable|array',
            'stats.*.icon' => 'nullable|string|max:255',
            'stats.*.text' => 'nullable|string|max:255'
        ]);

        $data = $request->all();
        
        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            
            // Store the file and check if it was successful
            $stored = $image->storeAs('homepage_galleries', $imageName, 'public');
            
            if ($stored) {
                $data['image'] = $imageName;
            } else {
                return redirect()->back()
                    ->withErrors(['image' => 'Failed to upload image. Please try again.'])
                    ->withInput();
            }
        }

        // Process stats
        if ($request->has('stats')) {
            $stats = [];
            foreach ($request->stats as $stat) {
                if (!empty($stat['text'])) {
                    $stats[] = [
                        'icon' => $stat['icon'] ?? '',
                        'text' => $stat['text']
                    ];
                }
            }
            $data['stats'] = $stats;
        }

        $data['is_active'] = (bool) $request->input('is_active', 0);

        HomepageGallery::create($data);

        return redirect()->route('homepage-galleries.index')
            ->with('success', 'Homepage gallery created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(HomepageGallery $homepageGallery)
    {
        return view('admin.homepage-galleries.show', compact('homepageGallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomepageGallery $homepageGallery)
    {
        return view('admin.homepage-galleries.edit', compact('homepageGallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomepageGallery $homepageGallery)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:homepage_galleries,slug,' . $homepageGallery->id,
            'description' => 'nullable|string',
            'icon' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'url' => ['nullable', 'string', 'max:255', function ($attribute, $value, $fail) {
                if (!empty($value)) {
                    // Allow relative URLs (starting with /) or full URLs
                    if (!filter_var($value, FILTER_VALIDATE_URL) && !preg_match('/^\/[a-zA-Z0-9\-_\/]*$/', $value)) {
                        $fail('The ' . $attribute . ' must be a valid URL or relative path (e.g., /free or https://example.com).');
                    }
                }
            }],
            'badge_text' => 'nullable|string|max:50',
            'badge_type' => 'required|in:default,new,free,premium,hot',
            'category_type' => 'required|in:regular,featured',
            'color_scheme' => 'required|in:popular,featured,active,new,free,others,default',
            'sort_order' => 'required|integer|min:0',
            'is_active' => 'nullable|boolean',
            'stats' => 'nullable|array',
            'stats.*.icon' => 'nullable|string|max:255',
            'stats.*.text' => 'nullable|string|max:255'
        ]);

        $data = $request->all();
        
        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            
            // Store the file and check if it was successful
            $stored = $image->storeAs('homepage_galleries', $imageName, 'public');
            
            if ($stored) {
                // Delete old image only after successful upload
                if ($homepageGallery->image) {
                    Storage::disk('public')->delete('homepage_galleries/' . $homepageGallery->image);
                }
                $data['image'] = $imageName;
            } else {
                return redirect()->back()
                    ->withErrors(['image' => 'Failed to upload image. Please try again.'])
                    ->withInput();
            }
        }

        // Process stats
        if ($request->has('stats')) {
            $stats = [];
            foreach ($request->stats as $stat) {
                if (!empty($stat['text'])) {
                    $stats[] = [
                        'icon' => $stat['icon'] ?? '',
                        'text' => $stat['text']
                    ];
                }
            }
            $data['stats'] = $stats;
        }

        $data['is_active'] = (bool) $request->input('is_active', 0);

        $homepageGallery->update($data);

        return redirect()->route('homepage-galleries.index')
            ->with('success', 'Homepage gallery updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomepageGallery $homepageGallery)
    {
        // Delete image file
        if ($homepageGallery->image) {
            Storage::disk('public')->delete('homepage_galleries/' . $homepageGallery->image);
        }

        $homepageGallery->delete();

        return redirect()->route('homepage-galleries.index')
            ->with('success', 'Homepage gallery deleted successfully.');
    }

    /**
     * Toggle the status of the gallery
     */
    public function toggleStatus(HomepageGallery $homepageGallery)
    {
        $homepageGallery->update([
            'is_active' => !$homepageGallery->is_active
        ]);

        return response()->json([
            'success' => true,
            'is_active' => $homepageGallery->is_active,
            'message' => 'Status updated successfully.'
        ]);
    }

    /**
     * Update the order of galleries
     */
    public function updateOrder(Request $request)
    {
        $request->validate([
            'galleries' => 'required|array',
            'galleries.*.id' => 'required|exists:homepage_galleries,id',
            'galleries.*.sort_order' => 'required|integer|min:0'
        ]);

        foreach ($request->galleries as $galleryData) {
            HomepageGallery::where('id', $galleryData['id'])
                ->update(['sort_order' => $galleryData['sort_order']]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Order updated successfully.'
        ]);
    }
}
