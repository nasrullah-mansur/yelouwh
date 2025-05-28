@extends('admin.layout')

@section('content')
<h5 class="mb-4 fw-light">
    <a class="text-reset" href="{{ url('panel/admin') }}">{{ __('admin.dashboard') }}</a>
    <i class="bi-chevron-right me-1 fs-6"></i>
    <span class="text-muted">Hero Slides</span>
</h5>

<div class="content">
    <div class="row">
        <div class="col-lg-12">

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check2 me-1"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card shadow-custom border-0">
                <div class="card-body p-lg-4">

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="card-title mb-0">
                            <i class="bi-images me-2"></i>
                            Hero Slides ({{ $slides->total() }})
                        </h6>
                        <a href="{{ route('hero-slides.create') }}" class="btn btn-sm btn-primary">
                            <i class="bi-plus me-1"></i> Add New Slide
                        </a>
                    </div>

                    @if ($slides->count() != 0)
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Background</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Badge</th>
                                        <th scope="col">Order</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($slides as $slide)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ $slide->background_image_url }}" 
                                                         alt="{{ $slide->title }}" 
                                                         class="rounded" 
                                                         style="width: 60px; height: 40px; object-fit: cover;">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <strong>{{ $slide->title }}</strong>
                                                    @if($slide->subtitle)
                                                        <br><small class="text-muted">{{ $slide->subtitle }}</small>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-light text-dark">
                                                    <i class="{{ $slide->badge_icon }}"></i>
                                                    {{ $slide->badge_text }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge bg-secondary">{{ $slide->sort_order }}</span>
                                            </td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input toggle-status" 
                                                           type="checkbox" 
                                                           data-id="{{ $slide->id }}"
                                                           {{ $slide->is_active ? 'checked' : '' }}>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-1">
                                                    <a href="{{ route('hero-slides.show', $slide) }}" 
                                                       class="btn btn-sm btn-outline-primary" title="View">
                                                        <i class="bi-eye"></i>
                                                    </a>
                                                    <a href="{{ route('hero-slides.edit', $slide) }}" 
                                                       class="btn btn-sm btn-outline-secondary" title="Edit">
                                                        <i class="bi-pencil"></i>
                                                    </a>
                                                    <form method="POST" action="{{ route('hero-slides.destroy', $slide) }}" 
                                                          class="d-inline" onsubmit="return confirm('Are you sure you want to delete this slide?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                                            <i class="bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        @if ($slides->hasPages())
                            <div class="d-flex justify-content-center">
                                {{ $slides->links() }}
                            </div>
                        @endif

                    @else
                        <div class="text-center py-5">
                            <i class="bi-images display-4 text-muted"></i>
                            <h5 class="mt-3 text-muted">No hero slides found</h5>
                            <p class="text-muted">Create your first hero slide to get started.</p>
                            <a href="{{ route('hero-slides.create') }}" class="btn btn-primary">
                                <i class="bi-plus me-1"></i> Add New Slide
                            </a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle status toggle
    document.querySelectorAll('.toggle-status').forEach(function(toggle) {
        toggle.addEventListener('change', function() {
            const slideId = this.dataset.id;
            const isActive = this.checked;
            
            fetch(`/panel/admin/hero-slides/${slideId}/toggle-status`, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    is_active: isActive
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    const alert = document.createElement('div');
                    alert.className = 'alert alert-success alert-dismissible fade show';
                    alert.innerHTML = `
                        <i class="bi bi-check2 me-1"></i> ${data.message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    `;
                    document.querySelector('.content').insertBefore(alert, document.querySelector('.card'));
                    
                    // Auto dismiss after 3 seconds
                    setTimeout(() => {
                        alert.remove();
                    }, 3000);
                } else {
                    // Revert toggle on error
                    this.checked = !isActive;
                    alert('Failed to update status. Please try again.');
                }
            })
            .catch(error => {
                // Revert toggle on error
                this.checked = !isActive;
                alert('An error occurred. Please try again.');
            });
        });
    });
});
</script>
@endsection 