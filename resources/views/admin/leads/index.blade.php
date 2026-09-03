@extends('admin.layouts.app')

@section('title', 'Website Enquiries')

@section('content')
<div class="admin-content-header">
    <div class="admin-content-header-left">
        <h1 class="admin-content-title">Website Enquiries</h1>
        <p class="admin-content-subtitle">Our own copy of every enquiry, saved before it is sent to Zoho Bigin</p>
    </div>

    <div class="admin-content-header-right">
        @if($unreadCount > 0)
            <span class="badge bg-primary fs-6 me-2">{{ $unreadCount }} unread</span>
        @endif
        @if($notInCrmCount > 0)
            <span class="badge bg-danger fs-6 me-3">{{ $notInCrmCount }} not in CRM</span>
        @endif

        <div class="dropdown">
            <button class="btn btn-professional-outline btn-professional-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                <i class="bi bi-funnel"></i> Filter
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('admin.leads.index') }}">All Enquiries</a></li>
                <li><a class="dropdown-item" href="{{ route('admin.leads.index') }}?filter=unread">Unread Only</a></li>
                <li><a class="dropdown-item" href="{{ route('admin.leads.index') }}?filter=not_in_crm">Not in CRM ({{ $notInCrmCount }})</a></li>
                <li><a class="dropdown-item" href="{{ route('admin.leads.index') }}?filter=uncontactable">No Phone &amp; No Email ({{ $uncontactableCount }})</a></li>
            </ul>
        </div>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

{{-- The reason this screen exists. Anything listed here was filled in by a real
     visitor and never reached the CRM, so it needs entering by hand. --}}
@if($notInCrmCount > 0 && $filter !== 'not_in_crm')
    <div class="alert alert-warning">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        <strong>{{ $notInCrmCount }}</strong> {{ $notInCrmCount === 1 ? 'enquiry' : 'enquiries' }}
        did not reach Zoho Bigin and must be entered by hand.
        <a href="{{ route('admin.leads.index') }}?filter=not_in_crm" class="alert-link">Show them</a>.
    </div>
@endif

<div class="card">
    <div class="card-body">
        @if($leads->isEmpty())
            <p class="text-muted mb-0 py-4 text-center">No enquiries yet.</p>
        @else
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Received</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Service</th>
                            <th>CRM</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($leads as $lead)
                            <tr class="{{ !$lead->is_read ? 'table-warning' : '' }}">
                                <td class="text-nowrap">{{ $lead->created_at?->format('d M Y, H:i') }}</td>
                                <td>{{ $lead->name ?: '—' }}</td>
                                <td class="text-nowrap">
                                    @if($lead->phone)
                                        <a href="tel:{{ $lead->phone }}">{{ $lead->phone }}</a>
                                    @else
                                        <span class="badge bg-danger">missing</span>
                                    @endif
                                </td>
                                <td>{{ $lead->email ?: '—' }}</td>
                                <td>{{ $lead->city ?: '—' }}</td>
                                <td>{{ $lead->service ?: '—' }}</td>
                                <td>
                                    @if($lead->zoho_status === 'browser')
                                        {{-- The browser delivers to Zoho itself, so the
                                             outcome is genuinely unknown to us. Saying
                                             "sent" here would be a claim we cannot back. --}}
                                        <span class="badge bg-secondary" title="Handed to the visitor's browser to deliver to Bigin; outcome not visible to this site">handed over</span>
                                    @elseif($lead->zoho_status === 'ok')
                                        <span class="badge bg-success">sent</span>
                                    @elseif($lead->zoho_status === null)
                                        <span class="badge bg-secondary">pending</span>
                                    @else
                                        <span class="badge bg-danger">{{ $lead->zoho_status }}{{ $lead->zoho_http_code ? ' '.$lead->zoho_http_code : '' }}</span>
                                    @endif
                                </td>
                                <td class="text-end text-nowrap">
                                    <a href="{{ route('admin.leads.show', $lead) }}" class="btn btn-sm btn-professional-outline">View</a>
                                    <form action="{{ route('admin.leads.'.($lead->is_read ? 'mark-unread' : 'mark-read'), $lead) }}"
                                          method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-professional-outline">
                                            {{ $lead->is_read ? 'Unread' : 'Read' }}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3">{{ $leads->links() }}</div>
        @endif
    </div>
</div>
@endsection
