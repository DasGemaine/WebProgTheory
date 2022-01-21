@extends('layouts.main')
@section('content')


@if (session()->has('success_add-story'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success_add-story') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- <button type="submit" class="btn btn-share border-0 text-light">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
  </svg>
  Share Story</button>  --}}

  <a href="/stories/add-story" class="btn btn-share text-light mb-4">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
    Share Story
  </a>


@foreach ($stories as $story)
<div class="card">
  <div class="card-header text-muted">
    By {{ $story->user->name }}
    
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $story->title }}</h5>
    <p class="card-text">{{ $story->thumbnail_text }}</p>
    <a href="/stories/{{ $story->title }}" class="btn btn-primary">Read now</a>
  </div>
</div>
@endforeach

@endsection