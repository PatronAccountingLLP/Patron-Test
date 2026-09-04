@extends('layouts.app')

@php
    /*
     | /updates and /case-laws — the list of what has been published, newest first.
     |
     | Deliberately plain. This is a directory, not a landing page: the reader arrived looking for
     | one document, and anything between them and the list of documents is in the way.
     */
@endphp

@section('title', $hubTitle . ' | Patron Accounting')
@section('meta_description', $hubLead)

@section('meta')
    <link rel="canonical" href="{{ url($hubPath) }}">
@endsection

@push('styles')
    @include('partials.page-css', ['file' => 'css/radar.css'])
@endpush

@section('content')
<div class="rdp-wrap">
    <header class="rdp-hub__head">
        <h1 class="rdp-h1">{{ $hubTitle }}</h1>
        <p class="rdp-hub__lead">{{ $hubLead }}</p>
    </header>

    <nav class="rdp-tabs" aria-label="Sections">
        <a href="{{ $hubPath }}" @class(['is-on' => $section === ''])>All</a>
        @foreach($sections as $key => $label)
            <a href="{{ $hubPath }}?section={{ $key }}" @class(['is-on' => $section === $key])>{{ $label }}</a>
        @endforeach
    </nav>

    @forelse($rows as $r)
        <article class="rdp-card">
            <a class="rdp-card__t" href="{{ $r->path }}">{{ $r->title }}</a>
            <div class="rdp-card__m">
                <span>{{ \App\Models\RadarPublication::sectionName($r->kind, $r->section) }}</span>
                @if($r->railLabel())<span>{{ $r->railLabel() }}</span>@endif
                @if($r->dated)<span>{{ $r->dated->format('d M Y') }}</span>@endif
            </div>
            @if($r->meta_description)
                <p class="rdp-card__d">{{ $r->meta_description }}</p>
            @endif
        </article>
    @empty
        <p class="rdp-empty">Nothing published here yet.</p>
    @endforelse

    <div class="rdp-pager">{{ $rows->links() }}</div>
</div>
@endsection
