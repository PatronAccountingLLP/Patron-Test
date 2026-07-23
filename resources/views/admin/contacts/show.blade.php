@extends('admin.layouts.app')

@section('title', 'View Contact Message')

@section('content')
<div class="admin-content-header">
    <div class="admin-content-header-left">
        <div class="d-flex align-items-center">
            <a href="{{ route('admin.contacts.index') }}" class="btn btn-professional-outline btn-professional-sm me-3">
                <i class="bi bi-arrow-left"></i> Back to Messages
            </a>
            <div>
                <h1 class="admin-content-title">Contact Message Details</h1>
                <p class="admin-content-subtitle">View and manage customer inquiry</p>
            </div>
        </div>
    </div>
    
    <div class="admin-content-header-right">
        <div class="btn-group" role="group">
            @if(!$contact->is_read)
                <form action="{{ route('admin.contacts.mark-read', $contact) }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check me-1"></i> Mark as Read
                    </button>
                </form>
            @else
                <form action="{{ route('admin.contacts.mark-unread', $contact) }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-warning">
                        <i class="bi bi-envelope me-1"></i> Mark as Unread
                    </button>
                </form>
            @endif
            
            <form action="{{ route('admin.contacts.destroy', $contact) }}" 
                  method="POST" 
                  class="d-inline"
                  onsubmit="return confirm('Are you sure you want to delete this contact?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class="bi bi-trash me-1"></i> Delete
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Alert Messages -->
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i>
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="row">
    <!-- Contact Details -->
    <div class="col-lg-8">
        <div class="admin-card">
            <div class="admin-card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="admin-card-title">{{ $contact->subject }}</h2>
                    <div class="d-flex align-items-center">
                        @if($contact->is_read)
                            <span class="badge bg-success me-2">
                                <i class="bi bi-envelope-open me-1"></i> Read
                            </span>
                        @else
                            <span class="badge bg-primary me-2">
                                <i class="bi bi-envelope me-1"></i> Unread
                            </span>
                        @endif
                        <small class="text-muted">
                            {{ $contact->created_at->format('M d, Y \a\t h:i A') }}
                        </small>
                    </div>
                </div>
            </div>
            
            <div class="admin-card-body">
                <div class="message-content">
                    <div class="message-header mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-info-item">
                                    <label class="fw-semibold text-muted">From:</label>
                                    <div class="contact-info-value">{{ $contact->name }}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-info-item">
                                    <label class="fw-semibold text-muted">Email:</label>
                                    <div class="contact-info-value">
                                        <a href="mailto:{{ $contact->email }}" class="text-decoration-none">
                                            {{ $contact->email }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @if($contact->phone)
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="contact-info-item">
                                    <label class="fw-semibold text-muted">Phone:</label>
                                    <div class="contact-info-value">
                                        <a href="tel:{{ $contact->phone }}" class="text-decoration-none">
                                            {{ $contact->phone }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    
                    <div class="message-body">
                        <label class="fw-semibold text-muted mb-2">Message:</label>
                        <div class="message-text">
                            {!! nl2br(e($contact->message)) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Sidebar -->
    <div class="col-lg-4">
        <!-- Quick Actions -->
        <div class="admin-card mb-4">
            <div class="admin-card-header">
                <h3 class="admin-card-title">Quick Actions</h3>
            </div>
            <div class="admin-card-body">
                <div class="d-grid gap-2">
                    <a href="mailto:{{ $contact->email }}?subject=Re: {{ $contact->subject }}" 
                       class="btn btn-primary" style="background: #2b8a6a !important;">
                        <i class="bi bi-reply me-2"></i> Reply via Email
                    </a>
                    
                    @if($contact->phone)
                    <a href="tel:{{ $contact->phone }}" 
                       class="btn btn-outline-primary">
                        <i class="bi bi-telephone me-2"></i> Call {{ $contact->name }}
                    </a>
                    @endif
                    
                    <button type="button" 
                            class="btn btn-outline-secondary" 
                            onclick="copyToClipboard('{{ $contact->email }}')">
                        <i class="bi bi-clipboard me-2"></i> Copy Email
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Contact Information -->
        <div class="admin-card">
            <div class="admin-card-header">
                <h3 class="admin-card-title">Contact Information</h3>
            </div>
            <div class="admin-card-body">
                <div class="contact-meta">
                    <div class="meta-item">
                        <div class="meta-label">Submitted:</div>
                        <div class="meta-value">{{ $contact->created_at->format('F d, Y') }}</div>
                        <div class="meta-subvalue">{{ $contact->created_at->format('h:i A') }}</div>
                    </div>
                    
                    <div class="meta-item">
                        <div class="meta-label">Time Ago:</div>
                        <div class="meta-value">{{ $contact->created_at->diffForHumans() }}</div>
                    </div>
                    
                    <div class="meta-item">
                        <div class="meta-label">Status:</div>
                        <div class="meta-value">
                            @if($contact->is_read)
                                <span class="badge bg-success">Read</span>
                            @else
                                <span class="badge bg-primary">Unread</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="meta-item">
                        <div class="meta-label">Message ID:</div>
                        <div class="meta-value">#{{ $contact->id }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(function() {
        // Show success message
        showNotification('Email copied to clipboard!', 'success');
    }, function(err) {
        console.error('Could not copy text: ', err);
        // Fallback for older browsers
        const textArea = document.createElement('textarea');
        textArea.value = text;
        document.body.appendChild(textArea);
        textArea.focus();
        textArea.select();
        try {
            document.execCommand('copy');
            showNotification('Email copied to clipboard!', 'success');
        } catch (err) {
            console.error('Fallback: Oops, unable to copy', err);
        }
        document.body.removeChild(textArea);
    });
}

function showNotification(message, type) {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
    notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
    notification.innerHTML = `
        <i class="bi bi-check-circle-fill me-2"></i>
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    document.body.appendChild(notification);
    
    // Auto remove after 3 seconds
    setTimeout(() => {
        if (notification.parentNode) {
            notification.parentNode.removeChild(notification);
        }
    }, 3000);
}
</script>
@endpush

@push('styles')
<style>
.admin-content-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 2rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #e9ecef;
}

.admin-content-header-left h1 {
    font-size: 1.75rem;
    font-weight: 600;
    color: #495057;
    margin-bottom: 0.5rem;
}

.admin-content-subtitle {
    color: #6c757d;
    margin-bottom: 0;
}

.message-content {
    font-size: 1rem;
    line-height: 1.6;
}

.contact-info-item {
    margin-bottom: 1rem;
}

.contact-info-item:last-child {
    margin-bottom: 0;
}

.contact-info-item label {
    display: block;
    font-size: 0.875rem;
    margin-bottom: 0.25rem;
}

.contact-info-value {
    font-size: 1rem;
    color: #495057;
}

.message-text {
    background-color: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    padding: 1.5rem;
    font-size: 1rem;
    line-height: 1.6;
    color: #495057;
    white-space: pre-wrap;
    word-wrap: break-word;
}

.contact-meta {
    space-y: 1rem;
}

.meta-item {
    padding: 0.75rem 0;
    border-bottom: 1px solid #f1f3f4;
}

.meta-item:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.meta-label {
    font-size: 0.875rem;
    font-weight: 600;
    color: #6c757d;
    margin-bottom: 0.25rem;
}

.meta-value {
    font-size: 1rem;
    color: #495057;
    font-weight: 500;
}

.meta-subvalue {
    font-size: 0.875rem;
    color: #6c757d;
    margin-top: 0.125rem;
}

.message-header {
    background-color: #f8f9fa;
    border-radius: 8px;
    padding: 1.5rem;
    border: 1px solid #e9ecef;
}

@media (max-width: 768px) {
    .admin-content-header {
        flex-direction: column;
        gap: 1rem;
    }
    
    .admin-content-header-left .d-flex {
        flex-direction: column;
        gap: 1rem;
    }
    
    .admin-content-header-right {
        align-self: stretch;
    }
    
    .btn-group {
        width: 100%;
    }
    
    .btn-group .btn {
        flex: 1;
    }
}
</style>
@endpush