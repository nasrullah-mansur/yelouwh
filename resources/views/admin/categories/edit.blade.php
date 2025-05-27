@extends('layouts.admin')

@section('title', 'Edit Category')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="fas fa-edit me-2"></i>
                        Edit Category: {{ $category->name }}
                    </h4>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-light btn-sm">
                        <i class="fas fa-arrow-left me-1"></i>
                        Back to Categories
                    </a>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.categories.update', $category) }}" method="POST" enctype="multipart/form-data" id="categoryForm">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <!-- Basic Information -->
                            <div class="col-lg-8">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="mb-0">Basic Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Category Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                                           id="name" name="name" value="{{ old('name', $category->name) }}" required>
                                                    @error('name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="slug" class="form-label">Slug</label>
                                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" 
                                                           id="slug" name="slug" value="{{ old('slug', $category->slug) }}">
                                                    <small class="form-text text-muted">Leave empty to auto-generate from name</small>
                                                    @error('slug')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                                      id="description" name="description" rows="3">{{ old('description', $category->description) }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="url" class="form-label">Custom URL</label>
                                            <input type="text" class="form-control @error('url') is-invalid @enderror" 
                                                   id="url" name="url" value="{{ old('url', $category->url) }}" 
                                                   placeholder="/creators or https://example.com">
                                            <small class="form-text text-muted">Leave empty to use default category URL</small>
                                            @error('url')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Visual Settings -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="mb-0">Visual Settings</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="icon" class="form-label">Icon Class <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <i id="icon-preview" class="{{ $category->icon }}"></i>
                                                        </span>
                                                        <input type="text" class="form-control @error('icon') is-invalid @enderror" 
                                                               id="icon" name="icon" value="{{ old('icon', $category->icon) }}" required>
                                                    </div>
                                                    <small class="form-text text-muted">FontAwesome icon class (e.g., fas fa-fire)</small>
                                                    @error('icon')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="color_scheme" class="form-label">Color Scheme <span class="text-danger">*</span></label>
                                                    <select class="form-select @error('color_scheme') is-invalid @enderror" 
                                                            id="color_scheme" name="color_scheme" required>
                                                        <option value="popular" {{ old('color_scheme', $category->color_scheme) === 'popular' ? 'selected' : '' }}>Popular (Red)</option>
                                                        <option value="featured" {{ old('color_scheme', $category->color_scheme) === 'featured' ? 'selected' : '' }}>Featured (Orange)</option>
                                                        <option value="active" {{ old('color_scheme', $category->color_scheme) === 'active' ? 'selected' : '' }}>Active (Purple)</option>
                                                        <option value="new" {{ old('color_scheme', $category->color_scheme) === 'new' ? 'selected' : '' }}>New (Teal)</option>
                                                        <option value="free" {{ old('color_scheme', $category->color_scheme) === 'free' ? 'selected' : '' }}>Free (Blue)</option>
                                                        <option value="others" {{ old('color_scheme', $category->color_scheme) === 'others' ? 'selected' : '' }}>Others (Gray)</option>
                                                        <option value="default" {{ old('color_scheme', $category->color_scheme) === 'default' ? 'selected' : '' }}>Default (Orange)</option>
                                                    </select>
                                                    @error('color_scheme')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="image" class="form-label">Background Image</label>
                                            @if($category->image)
                                                <div class="mb-2">
                                                    <img src="{{ $category->image_url }}" alt="Current image" class="img-thumbnail" style="max-width: 200px;">
                                                    <p class="text-muted small">Current image</p>
                                                </div>
                                            @endif
                                            <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                                   id="image" name="image" accept="image/*">
                                            <small class="form-text text-muted">Recommended size: 800x600px, Max: 2MB. Leave empty to keep current image.</small>
                                            @error('image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <div id="image-preview" class="mt-2" style="display: none;">
                                                <img id="preview-img" src="" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Stats -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="mb-0">Statistics</h5>
                                    </div>
                                    <div class="card-body">
                                        <div id="stats-container">
                                            @if($category->stats && count($category->stats) > 0)
                                                @foreach($category->stats as $index => $stat)
                                                    <div class="row stats-row {{ $index > 0 ? 'mt-2' : '' }}">
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="stats[{{ $index }}][icon]" 
                                                                   value="{{ $stat['icon'] ?? '' }}" placeholder="Icon (e.g., fas fa-users)">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="stats[{{ $index }}][text]" 
                                                                   value="{{ $stat['text'] ?? '' }}" placeholder="Text (e.g., 50K+ Creators)">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <button type="button" class="btn btn-outline-danger remove-stat" {{ count($category->stats) === 1 ? 'disabled' : '' }}>
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="row stats-row">
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="stats[0][icon]" placeholder="Icon (e.g., fas fa-users)">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="stats[0][text]" placeholder="Text (e.g., 50K+ Creators)">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button type="button" class="btn btn-outline-danger remove-stat" disabled>
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <button type="button" class="btn btn-outline-primary btn-sm mt-2" id="add-stat">
                                            <i class="fas fa-plus me-1"></i> Add Stat
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Settings Sidebar -->
                            <div class="col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="mb-0">Settings</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="category_type" class="form-label">Category Type <span class="text-danger">*</span></label>
                                            <select class="form-select @error('category_type') is-invalid @enderror" 
                                                    id="category_type" name="category_type" required>
                                                <option value="regular" {{ old('category_type', $category->category_type) === 'regular' ? 'selected' : '' }}>Regular</option>
                                                <option value="featured" {{ old('category_type', $category->category_type) === 'featured' ? 'selected' : '' }}>Featured</option>
                                            </select>
                                            @error('category_type')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="sort_order" class="form-label">Sort Order</label>
                                            <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                                   id="sort_order" name="sort_order" value="{{ old('sort_order', $category->sort_order) }}" min="0">
                                            @error('sort_order')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" 
                                                       {{ old('is_active', $category->is_active) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="is_active">
                                                    Active
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="mb-0">Badge Settings</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="badge_text" class="form-label">Badge Text</label>
                                            <input type="text" class="form-control @error('badge_text') is-invalid @enderror" 
                                                   id="badge_text" name="badge_text" value="{{ old('badge_text', $category->badge_text) }}" 
                                                   placeholder="New, Free, Hot, etc.">
                                            @error('badge_text')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="badge_type" class="form-label">Badge Type</label>
                                            <select class="form-select @error('badge_type') is-invalid @enderror" 
                                                    id="badge_type" name="badge_type">
                                                <option value="default" {{ old('badge_type', $category->badge_type) === 'default' ? 'selected' : '' }}>Default</option>
                                                <option value="new" {{ old('badge_type', $category->badge_type) === 'new' ? 'selected' : '' }}>New</option>
                                                <option value="free" {{ old('badge_type', $category->badge_type) === 'free' ? 'selected' : '' }}>Free</option>
                                                <option value="premium" {{ old('badge_type', $category->badge_type) === 'premium' ? 'selected' : '' }}>Premium</option>
                                                <option value="hot" {{ old('badge_type', $category->badge_type) === 'hot' ? 'selected' : '' }}>Hot</option>
                                            </select>
                                            @error('badge_type')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Preview -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Preview</h5>
                                    </div>
                                    <div class="card-body">
                                        <div id="category-preview" class="category-card-preview">
                                            <div class="preview-image">
                                                <img src="{{ $category->image_url }}" alt="Preview">
                                                <div class="preview-overlay"></div>
                                            </div>
                                            <div class="preview-content">
                                                <div class="preview-icon">
                                                    <i class="{{ $category->icon }}"></i>
                                                </div>
                                                <div class="preview-text">
                                                    <h6 class="preview-title">{{ $category->name }}</h6>
                                                    <p class="preview-description">{{ $category->description ?: 'Category description' }}</p>
                                                </div>
                                                <div class="preview-badge" style="{{ $category->badge_text ? 'display: block;' : 'display: none;' }}">{{ $category->badge_text }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
                                        <i class="fas fa-times me-1"></i>
                                        Cancel
                                    </a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save me-1"></i>
                                        Update Category
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    let statIndex = {{ $category->stats ? count($category->stats) : 1 }};

    // Auto-generate slug from name
    document.getElementById('name').addEventListener('input', function() {
        const name = this.value;
        const slug = name.toLowerCase()
            .replace(/[^a-z0-9 -]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-')
            .trim('-');
        document.getElementById('slug').value = slug;
        updatePreview();
    });

    // Update icon preview
    document.getElementById('icon').addEventListener('input', function() {
        const iconClass = this.value;
        document.getElementById('icon-preview').className = iconClass;
        updatePreview();
    });

    // Update description preview
    document.getElementById('description').addEventListener('input', updatePreview);

    // Update badge preview
    document.getElementById('badge_text').addEventListener('input', updatePreview);

    // Image preview
    document.getElementById('image').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview-img').src = e.target.result;
                document.getElementById('image-preview').style.display = 'block';
                document.querySelector('.preview-image img').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    // Add stat functionality
    document.getElementById('add-stat').addEventListener('click', function() {
        const container = document.getElementById('stats-container');
        const newRow = document.createElement('div');
        newRow.className = 'row stats-row mt-2';
        newRow.innerHTML = `
            <div class="col-md-4">
                <input type="text" class="form-control" name="stats[${statIndex}][icon]" placeholder="Icon (e.g., fas fa-users)">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="stats[${statIndex}][text]" placeholder="Text (e.g., 50K+ Creators)">
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-outline-danger remove-stat">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
        `;
        container.appendChild(newRow);
        statIndex++;
        updateRemoveButtons();
    });

    // Remove stat functionality
    document.addEventListener('click', function(e) {
        if (e.target.closest('.remove-stat')) {
            e.target.closest('.stats-row').remove();
            updateRemoveButtons();
        }
    });

    function updateRemoveButtons() {
        const removeButtons = document.querySelectorAll('.remove-stat');
        removeButtons.forEach((btn, index) => {
            btn.disabled = removeButtons.length === 1;
        });
    }

    function updatePreview() {
        const name = document.getElementById('name').value || 'Category Name';
        const description = document.getElementById('description').value || 'Category description';
        const icon = document.getElementById('icon').value || 'fas fa-folder';
        const badgeText = document.getElementById('badge_text').value;

        document.querySelector('.preview-title').textContent = name;
        document.querySelector('.preview-description').textContent = description;
        document.querySelector('.preview-icon i').className = icon;
        
        const badge = document.querySelector('.preview-badge');
        if (badgeText) {
            badge.textContent = badgeText;
            badge.style.display = 'block';
        } else {
            badge.style.display = 'none';
        }
    }

    updateRemoveButtons();
});
</script>

<style>
.category-card-preview {
    position: relative;
    height: 200px;
    border-radius: 15px;
    overflow: hidden;
    background: #f8f9fa;
}

.preview-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.preview-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.preview-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(255, 178, 0, 0.8), rgba(255, 140, 0, 0.6));
}

.preview-content {
    position: relative;
    z-index: 2;
    height: 100%;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    color: white;
}

.preview-icon {
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
}

.preview-text {
    flex: 1;
    margin: 10px 0;
}

.preview-title {
    font-size: 16px;
    font-weight: 600;
    margin: 0 0 5px 0;
}

.preview-description {
    font-size: 12px;
    margin: 0;
    opacity: 0.9;
}

.preview-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: rgba(0, 212, 170, 0.9);
    color: white;
    padding: 4px 8px;
    border-radius: 10px;
    font-size: 10px;
    font-weight: 600;
}

.stats-row {
    align-items: end;
}
</style>
@endpush
@endsection 