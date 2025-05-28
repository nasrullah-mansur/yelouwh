@extends('admin.layout')

@section('content')
<h5 class="mb-4 fw-light">
    <a class="text-reset" href="{{ url('panel/admin') }}">{{ __('admin.dashboard') }}</a>
    <i class="bi-chevron-right me-1 fs-6"></i>
    <a class="text-reset" href="{{ route('hero-slides.index') }}">Hero Slides</a>
    <i class="bi-chevron-right me-1 fs-6"></i>
    <span class="text-muted">{{ $heroSlide->title }}</span>
</h5>

<div class="content">
    <div class="row">
        <div class="col-lg-12">

            <div class="card shadow-custom border-0">
                <div class="card-body p-lg-4">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h6 class="card-title mb-0">
                            <i class="bi-eye me-2"></i>
                            Hero Slide Details
                        </h6>
                        <div>
                            <a href="{{ route('hero-slides.edit', $heroSlide) }}" class="btn btn-sm btn-primary me-2">
                                <i class="bi-pencil me-1"></i> Edit
                            </a>
                            <a href="{{ route('hero-slides.index') }}" class="btn btn-sm btn-secondary">
                                <i class="bi-arrow-left me-1"></i> Back to List
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Main Content -->
                        <div class="col-md-8">
                            <!-- Basic Information -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h6 class="mb-0">Basic Information</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-sm-3"><strong>Title:</strong></div>
                                        <div class="col-sm-9">{{ $heroSlide->title }}</div>
                                    </div>
                                    @if($heroSlide->subtitle)
                                    <div class="row mb-3">
                                        <div class="col-sm-3"><strong>Subtitle:</strong></div>
                                        <div class="col-sm-9">{{ $heroSlide->subtitle }}</div>
                                    </div>
                                    @endif
                                    <div class="row mb-3">
                                        <div class="col-sm-3"><strong>Description:</strong></div>
                                        <div class="col-sm-9">{{ $heroSlide->description }}</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Badge Information -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h6 class="mb-0">Badge Information</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-sm-3"><strong>Badge:</strong></div>
                                        <div class="col-sm-9">
                                            <span class="badge bg-light text-dark">
                                                <i class="{{ $heroSlide->badge_icon }}"></i>
                                                {{ $heroSlide->badge_text }}
                                            </span>
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
                                            <div class="mb-2">
                                                <strong>Text:</strong> {{ $heroSlide->primary_button_text }}
                                            </div>
                                            <div class="mb-2">
                                                <strong>URL:</strong> <a href="{{ $heroSlide->primary_button_url }}" target="_blank">{{ $heroSlide->primary_button_url }}</a>
                                            </div>
                                            <div class="mb-2">
                                                <strong>Icon:</strong> <i class="{{ $heroSlide->primary_button_icon }}"></i> {{ $heroSlide->primary_button_icon }}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="text-secondary">Secondary Button</h6>
                                            <div class="mb-2">
                                                <strong>Text:</strong> {{ $heroSlide->secondary_button_text }}
                                            </div>
                                            <div class="mb-2">
                                                <strong>URL:</strong> <a href="{{ $heroSlide->secondary_button_url }}" target="_blank">{{ $heroSlide->secondary_button_url }}</a>
                                            </div>
                                            <div class="mb-2">
                                                <strong>Icon:</strong> <i class="{{ $heroSlide->secondary_button_icon }}"></i> {{ $heroSlide->secondary_button_icon }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Dynamic Content -->
                            @if($heroSlide->hasStats())
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h6 class="mb-0">Statistics</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        @foreach($heroSlide->stats as $stat)
                                        <div class="col-md-4 mb-3">
                                            <div class="text-center">
                                                <div class="h4 text-primary">{{ $stat['number'] }}</div>
                                                <div class="text-muted">{{ $stat['label'] }}</div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if($heroSlide->hasFeatures())
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h6 class="mb-0">Features</h6>
                                </div>
                                <div class="card-body">
                                    @foreach($heroSlide->features as $feature)
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="{{ $feature['icon'] }} text-success me-2"></i>
                                        <span>{{ $feature['text'] }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif

                            @if($heroSlide->hasTestimonial())
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h6 class="mb-0">Testimonial</h6>
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote">
                                        <p class="mb-3">"{{ $heroSlide->testimonial['text'] }}"</p>
                                        @if(!empty($heroSlide->testimonial['author_name']))
                                        <footer class="blockquote-footer">
                                            <div class="d-flex align-items-center">
                                                @if(!empty($heroSlide->testimonial['author_image']))
                                                <img src="{{ asset('storage/hero_slides/' . $heroSlide->testimonial['author_image']) }}" 
                                                     alt="{{ $heroSlide->testimonial['author_name'] }}" 
                                                     class="rounded-circle me-2" 
                                                     style="width: 40px; height: 40px; object-fit: cover;">
                                                @endif
                                                <div>
                                                    <div class="fw-bold">{{ $heroSlide->testimonial['author_name'] }}</div>
                                                    @if(!empty($heroSlide->testimonial['author_title']))
                                                    <div class="text-muted small">{{ $heroSlide->testimonial['author_title'] }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </footer>
                                        @endif
                                    </blockquote>
                                </div>
                            </div>
                            @endif
                        </div>

                        <!-- Sidebar -->
                        <div class="col-md-4">
                            <!-- Settings -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h6 class="mb-0">Settings</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <strong>Status:</strong>
                                        @if($heroSlide->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-secondary">Inactive</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <strong>Sort Order:</strong> {{ $heroSlide->sort_order }}
                                    </div>
                                    <div class="mb-3">
                                        <strong>Created:</strong> {{ $heroSlide->created_at->format('M d, Y H:i') }}
                                    </div>
                                    <div class="mb-3">
                                        <strong>Updated:</strong> {{ $heroSlide->updated_at->format('M d, Y H:i') }}
                                    </div>
                                </div>
                            </div>

                            <!-- Images -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h6 class="mb-0">Images</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <strong>Background Image:</strong>
                                        <div class="mt-2">
                                            <img src="{{ $heroSlide->background_image_url }}" 
                                                 alt="Background" 
                                                 class="img-fluid rounded" 
                                                 style="max-height: 150px; width: 100%; object-fit: cover;">
                                        </div>
                                    </div>
                                    @if($heroSlide->hero_image)
                                    <div class="mb-3">
                                        <strong>Hero Image:</strong>
                                        <div class="mt-2">
                                            <img src="{{ $heroSlide->hero_image_url }}" 
                                                 alt="Hero" 
                                                 class="img-fluid rounded" 
                                                 style="max-height: 150px; width: 100%; object-fit: cover;">
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0">Actions</h6>
                                </div>
                                <div class="card-body">
                                    <div class="d-grid gap-2">
                                        <a href="{{ route('hero-slides.edit', $heroSlide) }}" class="btn btn-primary">
                                            <i class="bi-pencil me-1"></i> Edit Slide
                                        </a>
                                        <form method="POST" action="{{ route('hero-slides.destroy', $heroSlide) }}" 
                                              onsubmit="return confirm('Are you sure you want to delete this slide?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger w-100">
                                                <i class="bi-trash me-1"></i> Delete Slide
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
    </div>
</div>

@endsection 