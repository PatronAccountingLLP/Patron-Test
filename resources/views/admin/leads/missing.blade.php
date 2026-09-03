@extends('admin.layouts.app')

@section('title', 'Website Enquiries')

@section('content')
<div class="admin-content-header">
    <div class="admin-content-header-left">
        <h1 class="admin-content-title">Website Enquiries</h1>
        <p class="admin-content-subtitle">Not set up on this server yet</p>
    </div>
</div>

<div class="alert alert-danger">
    <h5><i class="bi bi-exclamation-triangle-fill me-2"></i>The enquiries table does not exist on this server</h5>
    <p class="mb-2">
        Website enquiries are being sent to Zoho Bigin, but they are <strong>not</strong> being
        saved here, so anything Zoho refuses is still being lost.
    </p>
    <p class="mb-0">
        Someone with server access needs to run the database migration:
        <code>php artisan migrate --force</code>
    </p>
</div>
@endsection
