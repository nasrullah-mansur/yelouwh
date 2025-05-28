@extends('admin.layout')

@section('content')
<h5 class="mb-4 fw-light">
    <a class="text-reset" href="{{ url('panel/admin') }}">{{ __('admin.dashboard') }}</a>
    <i class="bi-chevron-right me-1 fs-6"></i>
    <a class="text-reset" href="{{ route('hero-slides.index') }}">Hero Slides</a>
    <i class="bi-chevron-right me-1 fs-6"></i>
    <span class="text-muted">Create New Slide</span>
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
                            Create New Hero Slide
                        </h6>
                        <a href="{{ route('hero-slides.index') }}" class="btn btn-sm btn-secondary">
                            <i class="bi-arrow-left me-1"></i> Back to List
                        </a>
                    </div>

                    <form method="POST" action="{{ route('hero-slides.store') }}" enctype="multipart/form-data">
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
                                            <label for="title" class="form-label">Title *</label>
                                            <input type="text" class="form-control" id="title" name="title" 
                                                   value="{{ old('title') }}" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="subtitle" class="form-label">Subtitle</label>
                                            <input type="text" class="form-control" id="subtitle" name="subtitle" 
                                                   value="{{ old('subtitle') }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description *</label>
                                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Badge Information -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">Badge Information</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="badge_icon" class="form-label">Badge Icon *</label>
                                                    <input type="text" class="form-control" id="badge_icon" name="badge_icon" 
                                                           value="{{ old('badge_icon', 'fas fa-star') }}" required>
                                                    <div class="form-text">FontAwesome icon class (e.g., fas fa-star)</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="badge_text" class="form-label">Badge Text *</label>
                                                    <input type="text" class="form-control" id="badge_text" name="badge_text" 
                                                           value="{{ old('badge_text') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Button Information -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">Button Information</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6 class="text-primary">Primary Button</h6>
                                                <div class="mb-3">
                                                    <label for="primary_button_text" class="form-label">Text *</label>
                                                    <input type="text" class="form-control" id="primary_button_text" name="primary_button_text" 
                                                           value="{{ old('primary_button_text') }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="primary_button_url" class="form-label">URL *</label>
                                                    <input type="text" class="form-control" id="primary_button_url" name="primary_button_url" 
                                                           value="{{ old('primary_button_url') }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="primary_button_icon" class="form-label">Icon *</label>
                                                    <input type="text" class="form-control" id="primary_button_icon" name="primary_button_icon" 
                                                           value="{{ old('primary_button_icon', 'fas fa-rocket') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-secondary">Secondary Button</h6>
                                                <div class="mb-3">
                                                    <label for="secondary_button_text" class="form-label">Text *</label>
                                                    <input type="text" class="form-control" id="secondary_button_text" name="secondary_button_text" 
                                                           value="{{ old('secondary_button_text') }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="secondary_button_url" class="form-label">URL *</label>
                                                    <input type="text" class="form-control" id="secondary_button_url" name="secondary_button_url" 
                                                           value="{{ old('secondary_button_url') }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="secondary_button_icon" class="form-label">Icon *</label>
                                                    <input type="text" class="form-control" id="secondary_button_icon" name="secondary_button_icon" 
                                                           value="{{ old('secondary_button_icon', 'fas fa-play') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Stats Section -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">Statistics (Optional)</h6>
                                    </div>
                                    <div class="card-body">
                                        <div id="stats-container">
                                            <div class="stat-item row mb-3">
                                                <div class="col-md-6">
                                                    <label class="form-label">Number</label>
                                                    <input type="text" class="form-control" name="stats[0][number]" placeholder="50K+">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control" name="stats[0][label]" placeholder="Creators">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="addStat()">
                                            <i class="bi-plus"></i> Add Stat
                                        </button>
                                    </div>
                                </div>

                                <!-- Features Section -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">Features (Optional)</h6>
                                    </div>
                                    <div class="card-body">
                                        <div id="features-container">
                                            <div class="feature-item row mb-3">
                                                <div class="col-md-4">
                                                    <label class="form-label">Icon</label>
                                                    <input type="text" class="form-control" name="features[0][icon]" placeholder="fas fa-check-circle">
                                                </div>
                                                <div class="col-md-8">
                                                    <label class="form-label">Text</label>
                                                    <input type="text" class="form-control" name="features[0][text]" placeholder="Multiple revenue streams">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="addFeature()">
                                            <i class="bi-plus"></i> Add Feature
                                        </button>
                                    </div>
                                </div>

                                <!-- Testimonial Section -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">Testimonial (Optional)</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="testimonial_text" class="form-label">Testimonial Text</label>
                                            <textarea class="form-control" id="testimonial_text" name="testimonial[text]" rows="3" 
                                                      placeholder="This platform changed my life...">{{ old('testimonial.text') }}</textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="testimonial_author_name" class="form-label">Author Name</label>
                                                    <input type="text" class="form-control" id="testimonial_author_name" 
                                                           name="testimonial[author_name]" value="{{ old('testimonial.author_name') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="testimonial_author_title" class="form-label">Author Title</label>
                                                    <input type="text" class="form-control" id="testimonial_author_title" 
                                                           name="testimonial[author_title]" value="{{ old('testimonial.author_title') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="testimonial_author_image" class="form-label">Author Image</label>
                                            <input type="file" class="form-control" id="testimonial_author_image" 
                                                   name="testimonial[author_image]" accept="image/*">
                                            <div class="form-text">Upload author profile image (max 1MB)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Settings & Images -->
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">Settings</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="sort_order" class="form-label">Sort Order *</label>
                                            <input type="number" class="form-control" id="sort_order" name="sort_order" 
                                                   value="{{ old('sort_order', 0) }}" min="0" required>
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" 
                                                       {{ old('is_active', 1) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="is_active">
                                                    Active
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h6 class="mb-0">Images</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="background_image" class="form-label">Background Image *</label>
                                            <input type="file" class="form-control" id="background_image" name="background_image" 
                                                   accept="image/*" required>
                                            <div class="form-text">Upload background image (max 2MB)</div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="hero_image" class="form-label">Hero Image</label>
                                            <input type="file" class="form-control" id="hero_image" name="hero_image" 
                                                   accept="image/*">
                                            <div class="form-text">Upload hero/character image (max 2MB)</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi-check2 me-1"></i> Create Slide
                                    </button>
                                    <a href="{{ route('hero-slides.index') }}" class="btn btn-secondary">
                                        <i class="bi-x me-1"></i> Cancel
                                    </a>
                                </div>
                            </div>
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
let statIndex = 1;
let featureIndex = 1;

function addStat() {
    const container = document.getElementById('stats-container');
    const newStat = document.createElement('div');
    newStat.className = 'stat-item row mb-3';
    newStat.innerHTML = `
        <div class="col-md-6">
            <label class="form-label">Number</label>
            <input type="text" class="form-control" name="stats[${statIndex}][number]" placeholder="1M+">
        </div>
        <div class="col-md-6">
            <label class="form-label">Label</label>
            <div class="input-group">
                <input type="text" class="form-control" name="stats[${statIndex}][label]" placeholder="Supporters">
                <button type="button" class="btn btn-outline-danger" onclick="removeStat(this)">
                    <i class="bi-trash"></i>
                </button>
            </div>
        </div>
    `;
    container.appendChild(newStat);
    statIndex++;
}

function removeStat(button) {
    button.closest('.stat-item').remove();
}

function addFeature() {
    const container = document.getElementById('features-container');
    const newFeature = document.createElement('div');
    newFeature.className = 'feature-item row mb-3';
    newFeature.innerHTML = `
        <div class="col-md-4">
            <label class="form-label">Icon</label>
            <input type="text" class="form-control" name="features[${featureIndex}][icon]" placeholder="fas fa-check-circle">
        </div>
        <div class="col-md-8">
            <label class="form-label">Text</label>
            <div class="input-group">
                <input type="text" class="form-control" name="features[${featureIndex}][text]" placeholder="Advanced analytics">
                <button type="button" class="btn btn-outline-danger" onclick="removeFeature(this)">
                    <i class="bi-trash"></i>
                </button>
            </div>
        </div>
    `;
    container.appendChild(newFeature);
    featureIndex++;
}

function removeFeature(button) {
    button.closest('.feature-item').remove();
}
</script>
@endsection 