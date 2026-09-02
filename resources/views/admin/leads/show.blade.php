@extends('admin.layouts.app')

@section('title', 'Enquiry')

@section('content')
<div class="admin-content-header">
    <div class="admin-content-header-left">
        <h1 class="admin-content-title">{{ $lead->name ?: 'Enquiry' }}</h1>
        <p class="admin-content-subtitle">Received {{ $lead->created_at?->format('d M Y, H:i') }}</p>
    </div>
    <div class="admin-content-header-right">
        <a href="{{ route('admin.leads.index') }}" class="btn btn-professional-outline btn-professional-sm">
            <i class="bi bi-arrow-left"></i> Back to enquiries
        </a>
    </div>
</div>

@if($lead->zoho_status && $lead->zoho_status !== 'ok')
    <div class="alert alert-danger">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        This enquiry never reached Zoho Bigin
        @if($lead->zoho_http_code) (HTTP {{ $lead->zoho_http_code }}) @endif
        — enter it into the CRM by hand.
    </div>
@endif

@if(!$lead->phone && !$lead->email)
    <div class="alert alert-warning">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        No phone number and no email address, so there is no way to reply to this one.
    </div>
@endif

<div class="card">
    <div class="card-body">
        <table class="table align-middle mb-0">
            <tbody>
                <tr><th style="width:220px">Name</th><td>{{ $lead->name ?: '—' }}</td></tr>
                <tr><th>Phone</th><td>@if($lead->phone)<a href="tel:{{ $lead->phone }}">{{ $lead->phone }}</a>@else <span class="badge bg-danger">missing</span> @endif</td></tr>
                <tr><th>Email</th><td>@if($lead->email)<a href="mailto:{{ $lead->email }}">{{ $lead->email }}</a>@else — @endif</td></tr>
                <tr><th>City</th><td>{{ $lead->city ?: '—' }}</td></tr>
                <tr><th>Service</th><td>{{ $lead->service ?: '—' }}</td></tr>
                <tr><th>Deal name in Bigin</th><td>{{ $lead->deal_name ?: '—' }}</td></tr>
                <tr><th>Page they enquired from</th><td>@if($lead->page_url)<a href="{{ $lead->page_url }}" target="_blank" rel="noopener">{{ $lead->page_url }}</a>@else — @endif</td></tr>
                <tr><th>Message</th><td>{{ $lead->message ?: '—' }}</td></tr>
                <tr><th>Sent to Zoho Bigin</th>
                    <td>
                        @if($lead->zoho_status === 'ok')
                            <span class="badge bg-success">yes</span>
                        @elseif($lead->zoho_status === null)
                            <span class="badge bg-secondary">not attempted</span>
                        @else
                            <span class="badge bg-danger">no — {{ $lead->zoho_status }}{{ $lead->zoho_http_code ? ' (HTTP '.$lead->zoho_http_code.')' : '' }}</span>
                        @endif
                    </td>
                </tr>
                @if($lead->zoho_response)
                    <tr><th>Zoho's reply</th><td><code style="white-space:pre-wrap">{{ \Illuminate\Support\Str::limit($lead->zoho_response, 600) }}</code></td></tr>
                @endif
                <tr><th>IP</th><td>{{ $lead->ip ?: '—' }}</td></tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
