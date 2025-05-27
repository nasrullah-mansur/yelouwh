@extends('admin.layout')

@section('content')
<h5 class="mb-4 fw-light">
    <a class="text-reset" href="{{ url('panel/admin') }}">{{ __('admin.dashboard') }}</a>
    <i class="bi-chevron-right me-1 fs-6"></i>
    <a class="text-reset" href="{{ route('homepage-galleries.index') }}">Homepage Galleries</a>
    <i class="bi-chevron-right me-1 fs-6"></i>
    <span class="text-muted">{{ $homepageGallery->name }}</span>
</h5>

<div class="content">
    <div class="row">
        <div class="col-lg-12">

            <div class="card shadow-custom border-0">
                <div class="card-body p-lg-4">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h6 class="card-title mb-0">
                            <i class="bi-eye me-2"></i>
                            Gallery Details
                        </h6>
                        <div>
                            <a href="{{ $homepageGallery->full_url }}" target="_blank" class="btn btn-sm btn-outline-success me-2">
                                <i class="bi-box-arrow-up-right me-1"></i> View Live
                            </a>
                            <a href="{{ route('homepage-galleries.edit', $homepageGallery) }}" class="btn btn-sm btn-primary me-2">
                                <i class="bi-pencil me-1"></i> Edit
                            </a>
                            <a href="{{ route('homepage-galleries.index') }}" class="btn btn-sm btn-secondary">
                                <i class="bi-arrow-left me-1"></i> Back to List
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Gallery Preview -->
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h6 class="mb-0">Gallery Preview</h6>
                                </div>
                                <div class="card-body">
                                    <!-- Simulated gallery card -->
                                    <div class="position-relative" style="height: 200px; border-radius: 10px; overflow: hidden; background: {{ $homepageGallery->color_scheme_data['bg'] }};">
                                        @if($homepageGallery->image)
                                            <img src="{{ $homepageGallery->image_url }}" alt="{{ $homepageGallery->name }}" 
                                                 class="w-100 h-100" style="object-fit: cover;">
                                            <div class="position-absolute top-0 start-0 w-100 h-100" 
                                                 style="background: linear-gradient(135deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.6) 100%);"></div>
                                        @endif
                                        
                                        <div class="position-absolute bottom-0 start-0 p-3 text-white">
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="{{ $homepageGallery->icon }} me-2 fs-4"></i>
                                                <h5 class="mb-0">{{ $homepageGallery->name }}</h5>
                                                @if($homepageGallery->badge_text)
                                                    <span class="badge bg-{{ $homepageGallery->badge_type }} ms-2">{{ $homepageGallery->badge_text }}</span>
                                                @endif
                                            </div>
                                            @if($homepageGallery->description)
                                                <p class="mb-2 small">{{ $homepageGallery->description }}</p>
                                            @endif
                                            @if($homepageGallery->stats && count($homepageGallery->stats) > 0)
                                                <div class="d-flex gap-2">
                                                    @foreach($homepageGallery->stats as $stat)
                                                        <small class="text-white-50">
                                                            @if(isset($stat['icon']))
                                                                <i class="{{ $stat['icon'] }}"></i>
                                                            @endif
                                                            {{ $stat['text'] ?? '' }}
                                                        </small>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        
                                        <div class="position-absolute top-0 end-0 p-2">
                                            <i class="bi-arrow-right text-white fs-4"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Information -->
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h6 class="mb-0">Basic Information</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table table-borderless">
                                        <tr>
                                            <td class="fw-bold" style="width: 30%;">Name:</td>
                                            <td>{{ $homepageGallery->name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Slug:</td>
                                            <td><code>{{ $homepageGallery->slug }}</code></td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Description:</td>
                                            <td>{{ $homepageGallery->description ?: 'No description' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">URL:</td>
                                            <td>
                                                @if($homepageGallery->url)
                                                    <a href="{{ $homepageGallery->url }}" target="_blank">{{ $homepageGallery->url }}</a>
                                                @else
                                                    <span class="text-muted">Default route</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Status:</td>
                                            <td>
                                                <span class="badge bg-{{ $homepageGallery->is_active ? 'success' : 'secondary' }}">
                                                    {{ $homepageGallery->is_active ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Created:</td>
                                            <td>{{ $homepageGallery->created_at->format('M d, Y H:i') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Updated:</td>
                                            <td>{{ $homepageGallery->updated_at->format('M d, Y H:i') }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Visual Settings -->
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h6 class="mb-0">Visual Settings</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table table-borderless">
                                        <tr>
                                            <td class="fw-bold" style="width: 30%;">Icon:</td>
                                            <td>
                                                <i class="{{ $homepageGallery->icon }} me-2"></i>
                                                <code>{{ $homepageGallery->icon }}</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Color Scheme:</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2" style="width: 20px; height: 20px; border-radius: 3px; background: {{ $homepageGallery->color_scheme_data['bg'] }};"></div>
                                                    {{ ucfirst($homepageGallery->color_scheme) }}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Category Type:</td>
                                            <td>
                                                <span class="badge bg-{{ $homepageGallery->category_type === 'featured' ? 'warning' : 'secondary' }}">
                                                    {{ ucfirst($homepageGallery->category_type) }}
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Sort Order:</td>
                                            <td><span class="badge bg-light text-dark">{{ $homepageGallery->sort_order }}</span></td>
                                        </tr>
                                        @if($homepageGallery->image)
                                            <tr>
                                                <td class="fw-bold">Image:</td>
                                                <td>
                                                    <img src="{{ $homepageGallery->image_url }}" alt="{{ $homepageGallery->name }}" 
                                                         class="rounded" style="width: 60px; height: 40px; object-fit: cover;">
                                                </td>
                                            </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Badge & Statistics -->
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h6 class="mb-0">Badge & Statistics</h6>
                                </div>
                                <div class="card-body">
                                    @if($homepageGallery->badge_text)
                                        <div class="mb-3">
                                            <strong>Badge:</strong>
                                            <span class="badge bg-{{ $homepageGallery->badge_type }} ms-2">{{ $homepageGallery->badge_text }}</span>
                                            <small class="text-muted d-block">Type: {{ ucfirst($homepageGallery->badge_type) }}</small>
                                        </div>
                                    @endif

                                    @if($homepageGallery->stats && count($homepageGallery->stats) > 0)
                                        <div>
                                            <strong>Statistics:</strong>
                                            <div class="mt-2">
                                                @foreach($homepageGallery->stats as $stat)
                                                    <div class="d-flex align-items-center mb-2">
                                                        @if(isset($stat['icon']))
                                                            <i class="{{ $stat['icon'] }} me-2 text-muted"></i>
                                                        @endif
                                                        <span>{{ $stat['text'] ?? '' }}</span>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @else
                                        <div class="text-muted">
                                            <em>No statistics configured</em>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="d-flex justify-content-between">
                        <div>
                            <form method="POST" action="{{ route('homepage-galleries.destroy', $homepageGallery) }}" 
                                  class="d-inline" onsubmit="return confirm('Are you sure you want to delete this gallery? This action cannot be undone.')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="bi-trash me-1"></i> Delete Gallery
                                </button>
                            </form>
                        </div>
                        <div>
                            <a href="{{ route('homepage-galleries.edit', $homepageGallery) }}" class="btn btn-primary">
                                <i class="bi-pencil me-1"></i> Edit Gallery
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection 