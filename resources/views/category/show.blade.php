@extends('layouts.app')

@section('title', $category->name . ' - Categories')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Category Header -->
            <div class="category-header mb-5">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="d-flex align-items-center mb-3">
                            <div class="category-icon me-3">
                                <i class="{{ $category->icon }}"></i>
                            </div>
                            <div>
                                <h1 class="category-title mb-2">{{ $category->name }}</h1>
                                @if($category->description)
                                    <p class="category-description mb-0">{{ $category->description }}</p>
                                @endif
                            </div>
                        </div>
                        
                        @if($category->stats && count($category->stats) > 0)
                            <div class="category-stats">
                                @foreach($category->stats as $stat)
                                    <span class="stat-badge me-3">
                                        @if(isset($stat['icon']))
                                            <i class="{{ $stat['icon'] }} me-1"></i>
                                        @endif
                                        {{ $stat['text'] ?? '' }}
                                    </span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    
                    <div class="col-md-4 text-md-end">
                        @if($category->badge_text)
                            <span class="category-badge {{ $category->badge_class }}">
                                {{ $category->badge_text }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Category Content -->
            <div class="category-content">
                <div class="row">
                    <div class="col-12">
                        <div class="content-placeholder">
                            <div class="text-center py-5">
                                <i class="fas fa-search fa-3x text-muted mb-3"></i>
                                <h3 class="text-muted">{{ $category->name }} Content</h3>
                                <p class="text-muted">This is where you would display content related to the {{ $category->name }} category.</p>
                                <p class="text-muted">You can customize this view to show:</p>
                                <ul class="list-unstyled text-muted">
                                    <li><i class="fas fa-check text-success me-2"></i>Creators in this category</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Posts and content</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Featured items</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Related categories</li>
                                </ul>
                                
                                <div class="mt-4">
                                    <a href="{{ url('/') }}" class="btn btn-primary">
                                        <i class="fas fa-home me-2"></i>
                                        Back to Home
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.category-header {
    background: linear-gradient(135deg, {{ $category->color_scheme_data['primary'] }}15, {{ $category->color_scheme_data['secondary'] }}15);
    border-radius: 20px;
    padding: 2rem;
    border: 1px solid {{ $category->color_scheme_data['primary'] }}20;
}

.category-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, {{ $category->color_scheme_data['primary'] }}, {{ $category->color_scheme_data['secondary'] }});
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: white;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.category-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #333;
    margin: 0;
}

.category-description {
    font-size: 1.1rem;
    color: #666;
    line-height: 1.6;
}

.stat-badge {
    display: inline-flex;
    align-items: center;
    background: rgba(255, 255, 255, 0.8);
    padding: 0.5rem 1rem;
    border-radius: 25px;
    font-size: 0.9rem;
    font-weight: 500;
    color: #333;
    border: 1px solid {{ $category->color_scheme_data['primary'] }}30;
    backdrop-filter: blur(10px);
}

.category-badge {
    padding: 0.75rem 1.5rem;
    border-radius: 25px;
    font-size: 1rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.category-badge.badge-new {
    background: linear-gradient(135deg, #00d4aa, #01a3a4);
    color: white;
}

.category-badge.badge-free {
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
}

.category-badge.badge-premium {
    background: linear-gradient(135deg, #f39c12, #e67e22);
    color: white;
}

.category-badge.badge-hot {
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    color: white;
}

.content-placeholder {
    background: #f8f9fa;
    border-radius: 15px;
    border: 2px dashed #dee2e6;
    min-height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
}

@media (max-width: 768px) {
    .category-header {
        padding: 1.5rem;
    }
    
    .category-icon {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }
    
    .category-title {
        font-size: 2rem;
    }
    
    .stat-badge {
        font-size: 0.8rem;
        padding: 0.4rem 0.8rem;
        margin-bottom: 0.5rem;
    }
}
</style>
@endsection 