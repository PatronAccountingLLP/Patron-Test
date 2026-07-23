@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Menu: {{ $menu->name }}</h1>
                <div>
                    <a href="{{ route('admin.menus.edit', $menu) }}" class="btn btn-primary" style="background: #2b8a6a !important;">
                        <i class="bi bi-pencil"></i> Edit Menu
                    </a>
                    <a href="{{ route('admin.menus.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Back to Menus
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Menu Items</h5>
                        </div>
                        <div class="card-body">
                            @if($menu->items->count() > 0)
                                <div class="list-group">
                                    @foreach($menu->items->where('parent_id', null)->sortBy('sort_order') as $item)
                                        @include('admin.menus.partials.menu-item', ['item' => $item, 'level' => 0])
                                    @endforeach
                                </div>
                            @else
                                <div class="text-center text-muted py-4">
                                    <p>No menu items found.</p>
                                    <a href="#" class="btn btn-primary" style="background: #2b8a6a !important;" data-bs-toggle="modal" data-bs-target="#addItemModal">
                                        Add First Item
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0">Menu Details</h6>
                        </div>
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-4">Name:</dt>
                                <dd class="col-sm-8">{{ $menu->name }}</dd>
                                
                                <dt class="col-sm-4">Slug:</dt>
                                <dd class="col-sm-8">{{ $menu->slug }}</dd>
                                
                                <dt class="col-sm-4">Location:</dt>
                                <dd class="col-sm-8">{{ $menu->location ?: 'Not set' }}</dd>
                                
                                <dt class="col-sm-4">Status:</dt>
                                <dd class="col-sm-8">
                                    <span class="badge bg-{{ $menu->is_active ? 'success' : 'secondary' }}">
                                        {{ $menu->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </dd>
                                
                                <dt class="col-sm-4">Items:</dt>
                                <dd class="col-sm-8">{{ $menu->items->count() }}</dd>
                                
                                <dt class="col-sm-4">Created:</dt>
                                <dd class="col-sm-8">{{ $menu->created_at->format('M d, Y H:i') }}</dd>
                                
                                <dt class="col-sm-4">Updated:</dt>
                                <dd class="col-sm-8">{{ $menu->updated_at->format('M d, Y H:i') }}</dd>
                            </dl>

                            @if($menu->description)
                                <div class="mt-3">
                                    <strong>Description:</strong>
                                    <p class="text-muted">{{ $menu->description }}</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header">
                            <h6 class="mb-0">Actions</h6>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-success btn-sm w-100 mb-2" data-bs-toggle="modal" data-bs-target="#addItemModal">
                                <i class="bi bi-plus"></i> Add Menu Item
                            </button>
                            <a href="{{ route('admin.menus.edit', $menu) }}" class="btn btn-primary btn-sm w-100 mb-2">
                                <i class="bi bi-pencil"></i> Edit Menu
                            </a>
                            <form method="POST" action="{{ route('admin.menus.destroy', $menu) }}" class="d-inline w-100">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm w-100" 
                                        onclick="return confirm('Are you sure? This will also delete all menu items.')">
                                    <i class="bi bi-trash"></i> Delete Menu
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Menu Item Modal -->
<div class="modal fade" id="addItemModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Menu Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST" action="{{ route('admin.menus.add-item', $menu) }}">
                @csrf
                <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title *</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <div class="mb-3">
                        <label for="url" class="form-label">URL *</label>
                        <input type="text" class="form-control" id="url" name="url" required>
                        <div class="form-text">External URL or internal path (e.g., /about)</div>
                    </div>

                    <div class="mb-3">
                        <label for="parent_id" class="form-label">Parent Item</label>
                        <select class="form-control" id="parent_id" name="parent_id">
                            <option value="">None (Top Level)</option>
                            @foreach($menu->items->where('parent_id', null) as $item)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="sort_order" class="form-label">Sort Order</label>
                        <input type="number" class="form-control" id="sort_order" name="sort_order" value="0" min="0">
                        <div class="form-text">Lower numbers appear first</div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" style="background: #2b8a6a !important;">Add Item</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection