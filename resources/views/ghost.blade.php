

@extends('layouts.main')
@section('content')

@if (session()->has('success_add-ghost'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success_add-ghost') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container">
    <div class="row">
        @foreach ($ghosts as $ghost)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <a href="/ghosts/{{$ghost->name}}">
                        <img src="{{ $ghost->ghost_image }}" class="card-img-top" height="380px">
                    </a>
                    <div class="card-body">
                        <a href="/ghosts/{{$ghost->name}}" class="text-decoration-none">
                            <h5 class="card-title text-dark">{{ $ghost->name }}</h5>
                        </a>
                        <p class="card-text">{{ $ghost->thumbnail_text }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection