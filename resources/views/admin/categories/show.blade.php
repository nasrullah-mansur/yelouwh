@extends('layouts.admin')

@section('title', 'View Category')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="fas fa-eye me-2"></i>
                        Category Details: {{ $category->name }}
                    </h4>
                    <div>
                        <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-light btn-sm me-2">
                            <i class="fas fa-edit me-1"></i>
                            Edit
                        </a>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-light btn-sm">
                            <i class="fas fa-arrow-left me-1"></i>
                            Back to Categories
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <!-- Category Preview -->
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="mb-0">Preview</h5>
                                </div>
                                <div class="card-body">
                                    <div class="category-card-preview">
                                        <div class="preview-image">
                                            <img src="{{ $category->image_url }}" alt="{{ $category->name }}">
                                            <div class="preview-overlay"></div>
                                        </div>
                                        <div class="preview-content">
                                            <div class="preview-icon">
                                                <i class="{{ $category->icon }}"></i>
                                            </div>
                                            <div class="preview-text">
                                                <h6 class="preview-title">{{ $category->name }}</h6>
                                                <p class="preview-description">{{ $category->description ?: 'No description' }}</p>
                                            </div>
                                            @if($category->badge_text)
                                                <div class="preview-badge">{{ $category->badge_text }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Category Information -->
                        <div class="col-lg-8">
                            <div class="row">
                                <!-- Basic Information -->
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h5 class="mb-0">Basic Information</h5>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-borderless">
                                                <tr>
                                                    <td><strong>Name:</strong></td>
                                                    <td>{{ $category->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Slug:</strong></td>
                                                    <td><code>{{ $category->slug }}</code></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Description:</strong></td>
                                                    <td>{{ $category->description ?: 'No description' }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>URL:</strong></td>
                                                    <td>
                                                        <a href="{{ $category->full_url }}" target="_blank" class="text-decoration-none">
                                                            {{ $category->url ?: '/category/' . $category->slug }}
                                                            <i class="fas fa-external-link-alt ms-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- Visual Settings -->
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h5 class="mb-0">Visual Settings</h5>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-borderless">
                                                <tr>
                                                    <td><strong>Icon:</strong></td>
                                                    <td>
                                                        <i class="{{ $category->icon }} me-2"></i>
                                                        <code>{{ $category->icon }}</code>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Color Scheme:</strong></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="color-preview me-2" 
                                                                 style="width: 20px; height: 20px; border-radius: 50%; 
                                                                        background: linear-gradient(135deg, {{ $category->color_scheme_data['primary'] }}, {{ $category->color_scheme_data['secondary'] }});
                                                                        border: 2px solid #fff; box-shadow: 0 0 0 1px rgba(0,0,0,0.1);"></div>
                                                            <span class="text-capitalize">{{ $category->color_scheme }}</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Type:</strong></td>
                                                    <td>
                                                        <span class="badge bg-{{ $category->category_type === 'featured' ? 'warning' : 'secondary' }}">
                                                            {{ ucfirst($category->category_type) }}
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Status:</strong></td>
                                                    <td>
                                                        <span class="badge bg-{{ $category->is_active ? 'success' : 'danger' }}">
                                                            {{ $category->is_active ? 'Active' : 'Inactive' }}
                                                        </span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- Badge & Order -->
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h5 class="mb-0">Badge & Order</h5>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-borderless">
                                                <tr>
                                                    <td><strong>Badge Text:</strong></td>
                                                    <td>
                                                        @if($category->badge_text)
                                                            <span class="badge bg-info">{{ $category->badge_text }}</span>
                                                        @else
                                                            <span class="text-muted">No badge</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Badge Type:</strong></td>
                                                    <td><span class="text-capitalize">{{ $category->badge_type }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Sort Order:</strong></td>
                                                    <td><span class="badge bg-light text-dark">{{ $category->sort_order }}</span></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- Statistics -->
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h5 class="mb-0">Statistics</h5>
                                        </div>
                                        <div class="card-body">
                                            @if($category->stats && count($category->stats) > 0)
                                                @foreach($category->stats as $stat)
                                                    <div class="d-flex align-items-center mb-2">
                                                        @if(isset($stat['icon']))
                                                            <i class="{{ $stat['icon'] }} me-2 text-primary"></i>
                                                        @endif
                                                        <span>{{ $stat['text'] ?? 'No text' }}</span>
                                                    </div>
                                                @endforeach
                                            @else
                                                <p class="text-muted mb-0">No statistics configured</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <!-- Timestamps -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Timestamps</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <strong>Created:</strong> {{ $category->created_at->format('M d, Y \a\t g:i A') }}
                                                </div>
                                                <div class="col-md-6">
                                                    <strong>Last Updated:</strong> {{ $category->updated_at->format('M d, Y \a\t g:i A') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-list me-1"></i>
                                    All Categories
                                </a>
                                <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-primary">
                                    <i class="fas fa-edit me-1"></i>
                                    Edit Category
                                </a>
                                <form action="{{ route('admin.categories.toggle-status', $category) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-{{ $category->is_active ? 'warning' : 'success' }}">
                                        <i class="fas fa-{{ $category->is_active ? 'pause' : 'play' }} me-1"></i>
                                        {{ $category->is_active ? 'Deactivate' : 'Activate' }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.category-card-preview {
    position: relative;
    height: 250px;
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
    padding: 25px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    color: white;
}

.preview-icon {
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
}

.preview-text {
    flex: 1;
    margin: 15px 0;
}

.preview-title {
    font-size: 20px;
    font-weight: 600;
    margin: 0 0 8px 0;
}

.preview-description {
    font-size: 14px;
    margin: 0;
    opacity: 0.9;
}

.preview-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: rgba(0, 212, 170, 0.9);
    color: white;
    padding: 6px 12px;
    border-radius: 12px;
    font-size: 12px;
    font-weight: 600;
}

.table td {
    padding: 0.75rem 0.5rem;
    vertical-align: middle;
}

.color-preview {
    flex-shrink: 0;
}
</style>
@endsection 