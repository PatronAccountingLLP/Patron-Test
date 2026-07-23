@props(['location' => 'footer', 'title' => null, 'fallback' => true])

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
        <div class="col-lg-3 col-md-6 mb-4">
            <h6 class="text-white mb-3 fw-bold">{{ $title ?? $menu->name }}</h6>
            <ul class="list-unstyled">
                @foreach($menu->items->where('parent_id', null)->sortBy('sort_order') as $item)
                    <li class="mb-2">
                        <a href="{{ $item->url }}" class="text-light text-decoration-none hover-orange" style="font-size: 0.9rem;">
                            {{ $item->title }}
                        </a>
                    </li>
                    
                    {{-- Display child items if any --}}
                    @foreach($menu->items->where('parent_id', $item->id)->sortBy('sort_order') as $child)
                        <li class="mb-2 ms-3">
                            <a href="{{ $child->url }}" class="text-light text-decoration-none hover-orange" style="font-size: 0.85rem;">
                                • {{ $child->title }}
                            </a>
                        </li>
                    @endforeach
                @endforeach
            </ul>
        </div>
    @endif
@empty
    @if($fallback)
        {{-- Fallback content if no dynamic menu found --}}
        {{ $slot }}
    @endif
@endforelse