@extends('admin.layout')

@section('content')
<h5 class="mb-4 fw-light">
    <a class="text-reset" href="{{ url('panel/admin') }}">{{ __('admin.dashboard') }}</a>
    <i class="bi-chevron-right me-1 fs-6"></i>
    <span class="text-muted">Homepage Galleries</span>
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
                            <i class="bi-grid-3x3-gap me-2"></i>
                            Homepage Galleries ({{ $galleries->total() }})
                        </h6>
                        <a href="{{ route('homepage-galleries.create') }}" class="btn btn-sm btn-primary">
                            <i class="bi-plus me-1"></i> Add New Gallery
                        </a>
                    </div>

                    @if ($galleries->count() != 0)
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Color Scheme</th>
                                        <th scope="col">Order</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="sortable-galleries">
                                    @foreach ($galleries as $gallery)
                                        <tr data-id="{{ $gallery->id }}">
                                            <td>
                                                @if($gallery->image)
                                                    <img src="{{ $gallery->image_url }}" alt="{{ $gallery->name }}" 
                                                         class="rounded" style="width: 50px; height: 35px; object-fit: cover;">
                                                @else
                                                    <div class="bg-light rounded d-flex align-items-center justify-content-center" 
                                                         style="width: 50px; height: 35px;">
                                                        <i class="{{ $gallery->icon }} text-muted"></i>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                <div>
                                                    <strong>{{ $gallery->name }}</strong>
                                                    @if($gallery->badge_text)
                                                        <span class="badge bg-{{ $gallery->badge_type }} ms-1">{{ $gallery->badge_text }}</span>
                                                    @endif
                                                </div>
                                                <small class="text-muted">{{ $gallery->slug }}</small>
                                            </td>
                                            <td>
                                                <span class="badge bg-{{ $gallery->category_type === 'featured' ? 'warning' : 'secondary' }}">
                                                    {{ ucfirst($gallery->category_type) }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="color-preview me-2" 
                                                         style="width: 20px; height: 20px; border-radius: 3px; background: {{ $gallery->color_scheme_data['bg'] }};"></div>
                                                    {{ ucfirst($gallery->color_scheme) }}
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-light text-dark">{{ $gallery->sort_order }}</span>
                                            </td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input status-toggle" 
                                                           type="checkbox" 
                                                           data-id="{{ $gallery->id }}"
                                                           {{ $gallery->is_active ? 'checked' : '' }}>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-1">
                                                    <a href="{{ route('homepage-galleries.show', $gallery) }}" 
                                                       class="btn btn-sm btn-outline-primary" title="View">
                                                        <i class="bi-eye"></i>
                                                    </a>
                                                    <a href="{{ route('homepage-galleries.edit', $gallery) }}" 
                                                       class="btn btn-sm btn-outline-secondary" title="Edit">
                                                        <i class="bi-pencil"></i>
                                                    </a>
                                                    <form method="POST" action="{{ route('homepage-galleries.destroy', $gallery) }}" 
                                                          class="d-inline" onsubmit="return confirm('Are you sure you want to delete this gallery?')">
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

                        @if ($galleries->hasPages())
                            <div class="d-flex justify-content-center">
                                {{ $galleries->links() }}
                            </div>
                        @endif

                    @else
                        <div class="text-center py-5">
                            <i class="bi-grid-3x3-gap display-4 text-muted"></i>
                            <h5 class="mt-3 text-muted">No galleries found</h5>
                            <p class="text-muted">Create your first homepage gallery to get started.</p>
                            <a href="{{ route('homepage-galleries.create') }}" class="btn btn-primary">
                                <i class="bi-plus me-1"></i> Add New Gallery
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
$(document).ready(function() {
    // Status toggle
    $('.status-toggle').change(function() {
        const galleryId = $(this).data('id');
        const isChecked = $(this).is(':checked');
        
        $.ajax({
            url: `/panel/admin/homepage-galleries/${galleryId}/toggle-status`,
            method: 'PATCH',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    // Show success message
                    const alertHtml = `
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check2 me-1"></i> ${response.message}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    `;
                    $('.content .row .col-lg-12').prepend(alertHtml);
                    
                    // Auto-hide after 3 seconds
                    setTimeout(function() {
                        $('.alert').fadeOut();
                    }, 3000);
                }
            },
            error: function() {
                // Revert the toggle if error
                $(this).prop('checked', !isChecked);
                alert('Error updating status. Please try again.');
            }
        });
    });
});
</script>
@endsection 