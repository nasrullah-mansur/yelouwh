@extends('layouts.app')

@section('title') Request Money -@endsection

@section('content')
<style>
    .request-money-container {
        background: linear-gradient(135deg, #fff 0%, #fff 100%);
        min-height: 100vh;
        padding: 120px 0 60px 0;
    }

    .main-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .main-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.15);
    }

    .card-header {
        background: linear-gradient(135deg, #ffb200, #ff8c00);
        color: white;
        padding: 30px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .card-header::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: conic-gradient(from 0deg, transparent, rgba(255, 255, 255, 0.1), transparent);
        animation: rotate 4s linear infinite;
    }

    .card-header h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0;
        position: relative;
        z-index: 2;
    }

    .card-header p {
        font-size: 1.1rem;
        margin: 10px 0 0;
        opacity: 0.9;
        position: relative;
        z-index: 2;
    }

    .form-container {
        padding: 40px;
    }

    .form-group {
        margin-bottom: 25px;
        position: relative;
    }

    .form-label {
        display: block;
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .form-control {
        width: 100%;
        padding: 16px 20px;
        border: 2px solid #e1e5e9;
        border-radius: 12px;
        font-size: 16px;
        transition: all 0.3s ease;
        background: #f8f9fa;
    }

    .form-control:focus {
        border-color: #ffb200;
        outline: none;
        box-shadow: 0 0 0 4px rgba(255, 178, 0, 0.1);
        background: white;
        transform: translateY(-2px);
    }

    .amount-input-group {
        position: relative;
    }

    .currency-symbol {
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-weight: 700;
        color: #ffb200;
        font-size: 18px;
        z-index: 3;
    }

    .amount-input {
        padding-left: 50px;
        font-size: 24px;
        font-weight: 600;
        text-align: center;
    }

    .btn-create-request {
        background: linear-gradient(135deg, #ffb200, #ff8c00);
        color: white;
        border: none;
        padding: 18px 40px;
        border-radius: 12px;
        font-size: 18px;
        font-weight: 600;
        width: 100%;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .btn-create-request::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }

    .btn-create-request:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(255, 178, 0, 0.4);
    }

    .btn-create-request:hover::before {
        left: 100%;
    }

    .btn-create-request:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        transform: none;
    }

    .recent-requests {
        background: white;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        margin-top: 30px;
    }

    .recent-requests h3 {
        color: #333;
        font-weight: 700;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .request-item {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 15px;
        border-left: 4px solid #ffb200;
        transition: all 0.3s ease;
    }

    .request-item:hover {
        transform: translateX(5px);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .request-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .request-amount {
        font-size: 1.5rem;
        font-weight: 700;
        color: #ffb200;
    }

    .request-status {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .status-pending {
        background: #fff3cd;
        color: #856404;
    }

    .status-completed {
        background: #d4edda;
        color: #155724;
    }

    .status-expired {
        background: #f8d7da;
        color: #721c24;
    }

    .share-url-container {
        background: #e3f2fd;
        border: 2px dashed #2196f3;
        border-radius: 12px;
        padding: 20px;
        margin-top: 20px;
        text-align: center;
    }

    .share-url {
        font-family: 'Courier New', monospace;
        background: white;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #ddd;
        word-break: break-all;
        margin: 10px 0;
    }

    .btn-copy {
        background: #2196f3;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-copy:hover {
        background: #1976d2;
        transform: translateY(-2px);
    }

    .loading-spinner {
        display: none;
        width: 20px;
        height: 20px;
        border: 2px solid #ffffff;
        border-top: 2px solid transparent;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin-right: 10px;
    }

    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .alert {
        border-radius: 12px;
        padding: 15px 20px;
        margin-bottom: 20px;
        border: none;
    }

    .alert-success {
        background: #d4edda;
        color: #155724;
    }

    .alert-danger {
        background: #f8d7da;
        color: #721c24;
    }

    @media (max-width: 768px) {
        .request-money-container {
            padding: 30px 0;
        }

        .card-header h2 {
            font-size: 2rem;
        }

        .form-container {
            padding: 30px 20px;
        }

        .recent-requests {
            padding: 20px;
        }

        .request-meta {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
    }
</style>

<div class="request-money-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="main-card">
                    <div class="card-header">
                        <h2><i class="fas fa-money-bill-wave mr-3"></i>Request Money</h2>
                        <p>Create a payment link to request money from anyone</p>
                    </div>

                    <div class="form-container">
                        <form id="requestMoneyForm">
                            @csrf
                            
                            <div class="form-group">
                                <label class="form-label">
                                    <i class="fas fa-dollar-sign mr-2"></i>Amount
                                </label>
                                <div class="amount-input-group">
                                    <span class="currency-symbol">{{ $settings->currency_symbol }}</span>
                                    <input 
                                        type="number" 
                                        name="amount" 
                                        class="form-control amount-input" 
                                        placeholder="0.00"
                                        min="{{ $settings->min_deposits_amount }}" 
                                        max="{{ $settings->max_deposits_amount }}"
                                        step="0.01"
                                        required
                                    >
                                </div>
                                <small class="text-muted">
                                    Minimum: {{ Helper::priceWithoutFormat($settings->min_deposits_amount) }} - 
                                    Maximum: {{ Helper::priceWithoutFormat($settings->max_deposits_amount) }}
                                </small>
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    <i class="fas fa-comment mr-2"></i>Description (Optional)
                                </label>
                                <input 
                                    type="text" 
                                    name="description" 
                                    class="form-control" 
                                    placeholder="What is this payment for?"
                                    maxlength="255"
                                >
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    <i class="fas fa-calendar mr-2"></i>Expires On (Optional)
                                </label>
                                <input 
                                    type="datetime-local" 
                                    name="expires_at" 
                                    class="form-control"
                                    min="{{ now()->addHour()->format('Y-m-d\TH:i') }}"
                                >
                                <small class="text-muted">Leave empty for 30 days expiration</small>
                            </div>

                            <button type="submit" class="btn-create-request">
                                <span class="loading-spinner"></span>
                                <i class="fas fa-link mr-2"></i>
                                Create Payment Link
                            </button>
                        </form>

                        <div id="shareUrlContainer" class="share-url-container" style="display: none;">
                            <h4><i class="fas fa-share mr-2"></i>Share this link:</h4>
                            <div class="share-url" id="shareUrl"></div>
                            <button class="btn-copy" onclick="copyToClipboard()">
                                <i class="fas fa-copy mr-2"></i>Copy Link
                            </button>
                            <div class="mt-3">
                                <button class="btn btn-outline-primary mr-2" onclick="shareViaWhatsApp()">
                                    <i class="fab fa-whatsapp mr-2"></i>WhatsApp
                                </button>
                                <button class="btn btn-outline-info mr-2" onclick="shareViaEmail()">
                                    <i class="fas fa-envelope mr-2"></i>Email
                                </button>
                                <button class="btn btn-outline-secondary" onclick="shareViaSMS()">
                                    <i class="fas fa-sms mr-2"></i>SMS
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                @if(isset($requests) && $requests->count() > 0)
                <div class="recent-requests">
                    <h3>
                        <i class="fas fa-history"></i>
                        Recent Requests
                    </h3>
                    
                    @foreach($requests as $request)
                    <div class="request-item">
                        <div class="request-meta">
                            <div class="request-amount">
                                {{ Helper::priceWithoutFormat($request->amount) }}
                            </div>
                            <span class="request-status status-{{ $request->status }}">
                                {{ ucfirst($request->status) }}
                            </span>
                        </div>
                        
                        @if($request->description)
                        <p class="mb-2"><strong>Description:</strong> {{ $request->description }}</p>
                        @endif
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                Created: {{ $request->created_at->format('M d, Y H:i') }}
                                @if($request->expires_at)
                                | Expires: {{ $request->expires_at->format('M d, Y H:i') }}
                                @endif
                            </small>
                            
                                                         @if($request->status === 'pending' && $request->expires_at > now())
                            <button class="btn btn-sm btn-outline-primary" onclick="copyRequestLink('{{ url('/pay-request/' . $request->token) }}')">
                                <i class="fas fa-copy mr-1"></i>Copy Link
                            </button>
                            @endif
                        </div>
                    </div>
                    @endforeach

                    {{ $requests->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('requestMoneyForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const submitBtn = this.querySelector('.btn-create-request');
    const spinner = this.querySelector('.loading-spinner');
    const formData = new FormData(this);
    
    // Show loading state
    submitBtn.disabled = true;
    spinner.style.display = 'inline-block';
    
    fetch('{{ route("request.money.post") }}', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show success message
            showAlert('success', data.message);
            
            // Show share URL
            document.getElementById('shareUrl').textContent = data.share_url;
            document.getElementById('shareUrlContainer').style.display = 'block';
            
            // Reset form
            this.reset();
            
            // Scroll to share container
            document.getElementById('shareUrlContainer').scrollIntoView({ behavior: 'smooth' });
        } else {
            // Show errors
            if (data.errors) {
                let errorMessage = '';
                Object.values(data.errors).forEach(errors => {
                    errors.forEach(error => {
                        errorMessage += error + '<br>';
                    });
                });
                showAlert('danger', errorMessage);
            } else {
                showAlert('danger', data.message || 'An error occurred');
            }
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showAlert('danger', 'An unexpected error occurred');
    })
    .finally(() => {
        // Hide loading state
        submitBtn.disabled = false;
        spinner.style.display = 'none';
    });
});

function showAlert(type, message) {
    // Remove existing alerts
    const existingAlerts = document.querySelectorAll('.alert');
    existingAlerts.forEach(alert => alert.remove());
    
    // Create new alert
    const alert = document.createElement('div');
    alert.className = `alert alert-${type}`;
    alert.innerHTML = message;
    
    // Insert at the top of form container
    const formContainer = document.querySelector('.form-container');
    formContainer.insertBefore(alert, formContainer.firstChild);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        alert.remove();
    }, 5000);
}

function copyToClipboard() {
    const shareUrl = document.getElementById('shareUrl').textContent;
    navigator.clipboard.writeText(shareUrl).then(() => {
        showAlert('success', 'Link copied to clipboard!');
    });
}

function copyRequestLink(url) {
    navigator.clipboard.writeText(url).then(() => {
        showAlert('success', 'Link copied to clipboard!');
    });
}

function shareViaWhatsApp() {
    const shareUrl = document.getElementById('shareUrl').textContent;
    const message = `Please pay my request: ${shareUrl}`;
    window.open(`https://wa.me/?text=${encodeURIComponent(message)}`, '_blank');
}

function shareViaEmail() {
    const shareUrl = document.getElementById('shareUrl').textContent;
    const subject = 'Payment Request';
    const body = `Hi,\n\nI've sent you a payment request. Please click the link below to pay:\n\n${shareUrl}\n\nThank you!`;
    window.open(`mailto:?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`, '_blank');
}

function shareViaSMS() {
    const shareUrl = document.getElementById('shareUrl').textContent;
    const message = `Payment request: ${shareUrl}`;
    window.open(`sms:?body=${encodeURIComponent(message)}`, '_blank');
}
</script>
@endsection
