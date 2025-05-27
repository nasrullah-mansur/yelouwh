@extends('admin.layout')

@section('content')
<h5 class="mb-4 fw-light">
    <a class="text-reset" href="{{ url('panel/admin') }}">{{ __('admin.dashboard') }}</a>
    <i class="bi-chevron-right me-1 fs-6"></i>
    <a class="text-reset" href="{{ route('homepage-galleries.index') }}">Homepage Galleries</a>
    <i class="bi-chevron-right me-1 fs-6"></i>
    <span class="text-muted">Create New Gallery</span>
</h5>

<div class="content">
    <div class="row">
        <div class="col-lg-12">

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card shadow-custom border-0">
                <div class="card-body p-lg-4">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h6 class="card-title mb-0">
                            <i class="bi-plus-circle me-2"></i>
                            Create New Homepage Gallery
                        </h6>
                        <a href="{{ route('homepage-galleries.index') }}" class="btn btn-sm btn-secondary">
                            <i class="bi-arrow-left me-1"></i> Back to List
                        </a>
                    </div>

                    <form method="POST" action="{{ route('homepage-galleries.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <!-- Basic Information -->
                            <div class="col-md-8">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">Basic Information</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Gallery Name *</label>
                                            <input type="text" class="form-control" id="name" name="name" 
                                                   value="{{ old('name') }}" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input type="text" class="form-control" id="slug" name="slug" 
                                                   value="{{ old('slug') }}" placeholder="Auto-generated from name">
                                            <div class="form-text">Leave empty to auto-generate from name</div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" id="description" name="description" 
                                                      rows="3">{{ old('description') }}</textarea>
                                        </div>

                                                                <div class="mb-3">
                            <label for="url" class="form-label">Destination URL <small class="text-muted">(Optional)</small></label>
                            <input type="text" class="form-control" id="url" name="url" 
                                   value="{{ old('url') }}" placeholder="/free or https://example.com/page">
                            <div class="form-text">Where users will be redirected when clicking this gallery. Use relative paths (e.g., /free) or full URLs (e.g., https://example.com). Leave empty to use the default gallery route.</div>
                        </div>
                                    </div>
                                </div>

                                <!-- Statistics -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">Statistics</h6>
                                    </div>
                                    <div class="card-body">
                                        <div id="stats-container">
                                            <div class="stat-item mb-3">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Icon</label>
                                                        <input type="text" class="form-control" name="stats[0][icon]" 
                                                               placeholder="fas fa-users" value="{{ old('stats.0.icon') }}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Text</label>
                                                        <input type="text" class="form-control" name="stats[0][text]" 
                                                               placeholder="50K+ Users" value="{{ old('stats.0.text') }}">
                                                    </div>
                                                    <div class="col-md-2 d-flex align-items-end">
                                                        <button type="button" class="btn btn-outline-danger btn-sm remove-stat">
                                                            <i class="bi-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-outline-primary btn-sm" id="add-stat">
                                            <i class="bi-plus me-1"></i> Add Statistic
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Visual Settings -->
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">Visual Settings</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="icon" class="form-label">Icon *</label>
                                            <input type="text" class="form-control" id="icon" name="icon" 
                                                   value="{{ old('icon', 'fas fa-folder') }}" required>
                                            <div class="form-text">FontAwesome icon class (e.g., fas fa-fire)</div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="image" class="form-label">Background Image</label>
                                            <input type="file" class="form-control" id="image" name="image" 
                                                   accept="image/jpeg,image/png,image/jpg,image/gif,image/webp">
                                            <div class="form-text">Max 2MB. Formats: JPG, PNG, GIF, WebP</div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="color_scheme" class="form-label">Color Scheme *</label>
                                            <select class="form-select" id="color_scheme" name="color_scheme" required>
                                                <option value="default" {{ old('color_scheme') == 'default' ? 'selected' : '' }}>Default</option>
                                                <option value="popular" {{ old('color_scheme') == 'popular' ? 'selected' : '' }}>Popular (Purple)</option>
                                                <option value="featured" {{ old('color_scheme') == 'featured' ? 'selected' : '' }}>Featured (Pink)</option>
                                                <option value="active" {{ old('color_scheme') == 'active' ? 'selected' : '' }}>Active (Blue)</option>
                                                <option value="new" {{ old('color_scheme') == 'new' ? 'selected' : '' }}>New (Green)</option>
                                                <option value="free" {{ old('color_scheme') == 'free' ? 'selected' : '' }}>Free (Pink-Yellow)</option>
                                                <option value="others" {{ old('color_scheme') == 'others' ? 'selected' : '' }}>Others (Light)</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="category_type" class="form-label">Category Type *</label>
                                            <select class="form-select" id="category_type" name="category_type" required>
                                                <option value="regular" {{ old('category_type') == 'regular' ? 'selected' : '' }}>Regular</option>
                                                <option value="featured" {{ old('category_type') == 'featured' ? 'selected' : '' }}>Featured</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="sort_order" class="form-label">Sort Order *</label>
                                            <input type="number" class="form-control" id="sort_order" name="sort_order" 
                                                   value="{{ old('sort_order', 0) }}" min="0" required>
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-check form-switch">
                                                <input type="hidden" name="is_active" value="0">
                                                <input class="form-check-input" type="checkbox" id="is_active" 
                                                       name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="is_active">
                                                    Active
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Badge Settings -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">Badge Settings</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="badge_text" class="form-label">Badge Text</label>
                                            <input type="text" class="form-control" id="badge_text" name="badge_text" 
                                                   value="{{ old('badge_text') }}" placeholder="New, Hot, Free, etc.">
                                        </div>

                                        <div class="mb-3">
                                            <label for="badge_type" class="form-label">Badge Type</label>
                                            <select class="form-select" id="badge_type" name="badge_type">
                                                <option value="default" {{ old('badge_type') == 'default' ? 'selected' : '' }}>Default</option>
                                                <option value="new" {{ old('badge_type') == 'new' ? 'selected' : '' }}>New (Green)</option>
                                                <option value="free" {{ old('badge_type') == 'free' ? 'selected' : '' }}>Free (Blue)</option>
                                                <option value="premium" {{ old('badge_type') == 'premium' ? 'selected' : '' }}>Premium (Gold)</option>
                                                <option value="hot" {{ old('badge_type') == 'hot' ? 'selected' : '' }}>Hot (Red)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('homepage-galleries.index') }}" class="btn btn-secondary">
                                <i class="bi-x-circle me-1"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi-check-circle me-1"></i> Create Gallery
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')
<script>
$(document).ready(function() {
    let statIndex = 1;

    // Add new statistic
    $('#add-stat').click(function() {
        const statHtml = `
            <div class="stat-item mb-3">
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Icon</label>
                        <input type="text" class="form-control" name="stats[${statIndex}][icon]" 
                               placeholder="fas fa-users">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Text</label>
                        <input type="text" class="form-control" name="stats[${statIndex}][text]" 
                               placeholder="50K+ Users">
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button type="button" class="btn btn-outline-danger btn-sm remove-stat">
                            <i class="bi-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        `;
        $('#stats-container').append(statHtml);
        statIndex++;
    });

    // Remove statistic
    $(document).on('click', '.remove-stat', function() {
        $(this).closest('.stat-item').remove();
    });

    // Auto-generate slug from name
    $('#name').on('input', function() {
        const name = $(this).val();
        const slug = name.toLowerCase()
            .replace(/[^a-z0-9 -]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-')
            .trim('-');
        $('#slug').val(slug);
    });
});
</script>
@endsection 