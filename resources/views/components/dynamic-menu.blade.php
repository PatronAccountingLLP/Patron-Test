@props(['location' => 'primary', 'fallback' => true])

@php
    // Get dynamic menus for specified location
    $menus = \App\Models\Menu::where('status', 'active')
        ->where('location', $location)
        ->with('items')
        ->orderBy('created_at')
        ->get();
@endphp

@forelse($menus as $menu)
    @if($menu->items && $menu->items->count() > 0)
        @foreach($menu->items->where('parent_id', null)->sortBy('sort_order') as $item)
            @php
                $hasChildren = $menu->items->where('parent_id', $item->id)->count() > 0;
                $isActive = request()->url() === rtrim($item->url, '/');
            @endphp
            
            <li class="nav-item {{ $hasChildren ? 'dropdown' : '' }}">
                <a class="nav-link {{ $hasChildren ? 'dropdown-toggle' : '' }} text-dark fw-medium {{ $isActive ? 'active' : '' }}" 
                   href="{{ $item->url }}"
                   @if($hasChildren) role="button" data-bs-toggle="dropdown" @endif>
                    {{ $item->title }}
                </a>
                
                @if($hasChildren)
                    <ul class="dropdown-menu">
                        @foreach($menu->items->where('parent_id', $item->id)->sortBy('sort_order') as $child)
                            <li><a class="dropdown-item" href="{{ $child->url }}">{{ $child->title }}</a></li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    @endif
@empty
    @if($fallback)
        {{-- Fallback static menu if no dynamic menus found --}}
        <li class="nav-item">
            <a class="nav-link text-dark fw-medium" href="{{ route('frontend.index') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark fw-medium" href="{{ route('frontend.posts.index') }}">Posts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark fw-medium" href="{{ route('frontend.pages.index') }}">Pages</a>
        </li>
    @endif
@endforelse