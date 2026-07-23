@extends('admin.layouts.app')

@section('title', 'Contact Messages')

@section('content')
<div class="admin-content-header">
    <div class="admin-content-header-left">
        <h1 class="admin-content-title">Contact Messages</h1>
        <p class="admin-content-subtitle">Manage and respond to customer inquiries</p>
    </div>
    
    <div class="admin-content-header-right">
        @if($unreadCount > 0)
            <span class="badge bg-primary fs-6 me-3">{{ $unreadCount }} unread</span>
        @endif
        
        <div class="dropdown">
            <button class="btn btn-professional-outline btn-professional-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                <i class="bi bi-funnel"></i> Filter
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('admin.contacts.index') }}">All Messages</a></li>
                <li><a class="dropdown-item" href="{{ route('admin.contacts.index') }}?filter=unread">Unread Only</a></li>
                <li><a class="dropdown-item" href="{{ route('admin.contacts.index') }}?filter=read">Read Only</a></li>
            </ul>
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

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<!-- Contacts Table -->
<div class="admin-card">
    <div class="admin-card-header">
        <div class="admin-card-header-left">
            <h2 class="admin-card-title">Messages</h2>
        </div>
        
        <div class="admin-card-header-right">
            <!-- Bulk Actions -->
            <div class="d-flex align-items-center">
                <select class="form-select form-select-sm me-2" id="bulk-actions" style="width: auto;">
                    <option value="">Bulk Actions</option>
                    <option value="delete">Delete Selected</option>
                    <option value="mark-read">Mark as Read</option>
                    <option value="mark-unread">Mark as Unread</option>
                </select>
            </div>
        </div>
    </div>
    
    <div class="admin-card-body">
        @if($contacts->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th width="40">
                                <input type="checkbox" class="form-check-input" id="select-all">
                            </th>
                            <th width="60">Status</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th width="120">Date</th>
                            <th width="120">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        <tr class="{{ !$contact->is_read ? 'table-warning' : '' }}">
                            <td>
                                <input type="checkbox" class="form-check-input contact-checkbox" value="{{ $contact->id }}">
                            </td>
                            <td>
                                @if($contact->is_read)
                                    <span class="badge bg-success">
                                        <i class="bi bi-envelope-open"></i>
                                    </span>
                                @else
                                    <span class="badge bg-primary">
                                        <i class="bi bi-envelope"></i>
                                    </span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="fw-semibold">{{ $contact->name }}</div>
                                        @if($contact->phone)
                                            <small class="text-muted">{{ $contact->phone }}</small>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="mailto:{{ $contact->email }}" class="text-decoration-none">
                                    {{ $contact->email }}
                                </a>
                            </td>
                            <td>
                                <div class="subject-preview">
                                    {{ Str::limit($contact->subject, 50) }}
                                </div>
                            </td>
                            <td>
                                <small class="text-muted">
                                    {{ $contact->created_at->format('M d, Y') }}<br>
                                    {{ $contact->created_at->format('h:i A') }}
                                </small>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.contacts.show', $contact) }}" 
                                       class="btn btn-sm btn-outline-primary" 
                                       title="View">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    
                                    @if(!$contact->is_read)
                                        <form action="{{ route('admin.contacts.mark-read', $contact) }}" 
                                              method="POST" 
                                              class="d-inline">
                                            @csrf
                                            <button type="submit" 
                                                    class="btn btn-sm btn-outline-success" 
                                                    title="Mark as Read">
                                                <i class="bi bi-check"></i>
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{ route('admin.contacts.mark-unread', $contact) }}" 
                                              method="POST" 
                                              class="d-inline">
                                            @csrf
                                            <button type="submit" 
                                                    class="btn btn-sm btn-outline-warning" 
                                                    title="Mark as Unread">
                                                <i class="bi bi-envelope"></i>
                                            </button>
                                        </form>
                                    @endif
                                    
                                    <form action="{{ route('admin.contacts.destroy', $contact) }}" 
                                          method="POST" 
                                          class="d-inline"
                                          onsubmit="return confirm('Are you sure you want to delete this contact?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="btn btn-sm btn-outline-danger" 
                                                title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div class="text-muted">
                    Showing {{ $contacts->firstItem() }} to {{ $contacts->lastItem() }} of {{ $contacts->total() }} results
                </div>
                {{ $contacts->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <div class="mb-3">
                    <i class="bi bi-inbox" style="font-size: 3rem; color: #dee2e6;"></i>
                </div>
                <h3 class="text-muted">No Messages Yet</h3>
                <p class="text-muted">When customers submit the contact form, their messages will appear here.</p>
            </div>
        @endif
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Select all functionality
    const selectAll = document.getElementById('select-all');
    const contactCheckboxes = document.querySelectorAll('.contact-checkbox');
    
    if (selectAll) {
        selectAll.addEventListener('change', function() {
            contactCheckboxes.forEach(checkbox => {
                checkbox.checked = selectAll.checked;
            });
        });
    }
    
    // Bulk actions
    const bulkActions = document.getElementById('bulk-actions');
    if (bulkActions) {
        bulkActions.addEventListener('change', function() {
            const selectedContacts = document.querySelectorAll('.contact-checkbox:checked');
            
            if (selectedContacts.length === 0) {
                alert('Please select contacts first.');
                this.value = '';
                return;
            }
            
            const action = this.value;
            const contactIds = Array.from(selectedContacts).map(cb => cb.value);
            
            if (action === 'delete') {
                if (confirm(`Are you sure you want to delete ${selectedContacts.length} selected contacts?`)) {
                    bulkDelete(contactIds);
                }
            } else if (action === 'mark-read' || action === 'mark-unread') {
                bulkUpdateStatus(contactIds, action);
            }
            
            this.value = '';
        });
    }
});

function bulkDelete(ids) {
    fetch('{{ route("admin.contacts.bulk-delete") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ ids: ids })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            location.reload();
        } else {
            alert(data.message || 'Error deleting contacts');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error deleting contacts');
    });
}

function bulkUpdateStatus(ids, action) {
    // This would require additional backend endpoints for bulk status updates
    // For now, we'll just refresh the page
    alert('Bulk status update functionality coming soon!');
}
</script>
@endpush

@push('styles')
<style>
.subject-preview {
    max-width: 300px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.table-warning {
    background-color: rgba(255, 193, 7, 0.1) !important;
}

.admin-content-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 2rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #e9ecef;
}

.admin-content-header-left h1 {
    font-size: 2rem;
    font-weight: 600;
    color: #495057;
    margin-bottom: 0.5rem;
}

.admin-content-subtitle {
    color: #6c757d;
    margin-bottom: 0;
}

.admin-content-header-right {
    display: flex;
    align-items: center;
    gap: 1rem;
}
</style>
@endpush