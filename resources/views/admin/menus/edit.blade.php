@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Edit Menu: {{ $menu->name }}</h1>
                <a href="{{ route('admin.menus.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back to Menus
                </a>
            </div>

            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.menus.update', $menu) }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Menu Name *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                           id="name" name="name" value="{{ old('name', $menu->name) }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="slug" class="form-label">Menu Slug *</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" 
                                           id="slug" name="slug" value="{{ old('slug', $menu->slug) }}" required>
                                    <div class="form-text">URL-friendly version of the name</div>
                                    @error('slug')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="location" class="form-label">Menu Location</label>
                                    <select class="form-control @error('location') is-invalid @enderror" 
                                            id="location" name="location">
                                        <option value="">Select Location</option>
                                        <option value="header" {{ old('location', $menu->location) == 'header' ? 'selected' : '' }}>Header</option>
                                        <option value="footer" {{ old('location', $menu->location) == 'footer' ? 'selected' : '' }}>Footer</option>
                                        <option value="sidebar" {{ old('location', $menu->location) == 'sidebar' ? 'selected' : '' }}>Sidebar</option>
                                        <option value="custom" {{ old('location', $menu->location) == 'custom' ? 'selected' : '' }}>Custom</option>
                                    </select>
                                    @error('location')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" 
                                              id="description" name="description" rows="3">{{ old('description', $menu->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="mb-0">Menu Settings</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" 
                                                       id="status" name="status" value="active" 
                                                       {{ old('status', $menu->status) == 'active' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="status">
                                                    Active
                                                </label>
                                            </div>
                                            <small class="form-text text-muted">Make this menu active</small>
                                        </div>

                                        <div class="mb-3">
                                            <label for="sort_order" class="form-label">Sort Order</label>
                                            <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                                   id="sort_order" name="sort_order" value="{{ old('sort_order', $menu->sort_order) }}" min="0">
                                            @error('sort_order')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <a href="{{ route('admin.menus.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary" style="background: #2b8a6a !important;">Update Menu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Auto-generate slug from name
document.getElementById('name').addEventListener('input', function() {
    const name = this.value;
    const slug = name.toLowerCase()
        .replace(/[^\w\s-]/g, '')
        .replace(/[\s_-]+/g, '-')
        .replace(/^-+|-+$/g, '');
    document.getElementById('slug').value = slug;
});
</script>
@endsection