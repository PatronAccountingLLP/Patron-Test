@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Menus</h1>
                <a href="{{ route('admin.menus.create') }}" class="btn btn-primary" style="background: #2b8a6a !important;">
                    <i class="bi bi-plus"></i> Add New Menu
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Items</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($menus as $menu)
                                    <tr>
                                        <td>{{ $menu->name }}</td>
                                        <td>{{ $menu->location }}</td>
                                        <td>{{ $menu->items->count() }}</td>
                                        <td>
                                            <span class="badge bg-{{ $menu->status === 'active' ? 'success' : 'secondary' }}">
                                                {{ $menu->status === 'active' ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td>{{ $menu->created_at->format('M d, Y') }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.menus.show', $menu) }}" class="btn btn-sm btn-outline-primary">View</a>
                                                <a href="{{ route('admin.menus.edit', $menu) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                <form method="POST" action="{{ route('admin.menus.destroy', $menu) }}" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" 
                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted py-4">
                                            No menus found. <a href="{{ route('admin.menus.create') }}">Create your first menu</a>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if($menus->hasPages())
                        <div class="d-flex justify-content-center mt-4">
                            {{ $menus->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection