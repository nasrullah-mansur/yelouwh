<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of categories
     */
    public function index()
    {
        $categories = Category::ordered()->paginate(15);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new category
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created category
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'url' => 'nullable|string|max:255',
            'badge_text' => 'nullable|string|max:50',
            'badge_type' => 'required|in:default,new,free,premium,hot',
            'category_type' => 'required|in:regular,featured',
            'color_scheme' => 'required|in:popular,featured,active,new,free,others,default',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
            'stats' => 'nullable|array'
        ]);

        $data = $request->all();
        
        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('categories', $imageName, 'public');
            $data['image'] = $imagePath;
        }

        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        // Ensure unique slug
        $originalSlug = $data['slug'];
        $counter = 1;
        while (Category::where('slug', $data['slug'])->exists()) {
            $data['slug'] = $originalSlug . '-' . $counter;
            $counter++;
        }

        Category::create($data);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified category
     */
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified category
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified category
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'url' => 'nullable|string|max:255',
            'badge_text' => 'nullable|string|max:50',
            'badge_type' => 'required|in:default,new,free,premium,hot',
            'category_type' => 'required|in:regular,featured',
            'color_scheme' => 'required|in:popular,featured,active,new,free,others,default',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
            'stats' => 'nullable|array'
        ]);

        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($category->image && Storage::disk('public')->exists($category->image)) {
                Storage::disk('public')->delete($category->image);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('categories', $imageName, 'public');
            $data['image'] = $imagePath;
        }

        // Update slug if name changed
        if ($request->name !== $category->name) {
            $newSlug = Str::slug($request->name);
            $originalSlug = $newSlug;
            $counter = 1;
            while (Category::where('slug', $newSlug)->where('id', '!=', $category->id)->exists()) {
                $newSlug = $originalSlug . '-' . $counter;
                $counter++;
            }
            $data['slug'] = $newSlug;
        }

        $category->update($data);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified category
     */
    public function destroy(Category $category)
    {
        // Delete associated image
        if ($category->image && Storage::disk('public')->exists($category->image)) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category deleted successfully.');
    }

    /**
     * Toggle category status
     */
    public function toggleStatus(Category $category)
    {
        $category->update(['is_active' => !$category->is_active]);

        $status = $category->is_active ? 'activated' : 'deactivated';
        return redirect()->back()->with('success', "Category {$status} successfully.");
    }

    /**
     * Update sort order
     */
    public function updateOrder(Request $request)
    {
        $request->validate([
            'categories' => 'required|array',
            'categories.*.id' => 'required|exists:categories,id',
            'categories.*.sort_order' => 'required|integer|min:0'
        ]);

        foreach ($request->categories as $categoryData) {
            Category::where('id', $categoryData['id'])
                ->update(['sort_order' => $categoryData['sort_order']]);
        }

        return response()->json(['success' => true, 'message' => 'Order updated successfully.']);
    }
} 