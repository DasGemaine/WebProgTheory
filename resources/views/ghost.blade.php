

@extends('layouts.main')
@section('content')

@if (session()->has('success_add-ghost'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success_add-ghost') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


@foreach ($ghosts as $ghost)
<div class="card" style="width: 18rem;">
    <a href="/ghosts/{{ $ghost->name }}">
        <img src={{ $ghost->ghost_image }} class="card-img-top" alt="...">
    </a>
        <div class="card-body">
            <a href="/ghosts/{{ $ghost->name }}" class="text-decoration-none text-dark">
                <h5 class="card-title">{{ $ghost->name }}</h5>
            </a>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>
</div>


    {{-- <article class='mb-4 text-light'>
        <h2>
            <a href="/ghosts/{{$ghost->name}}/detail" class="text-decoration-none">
                {{ $ghost->name}}
            </a>
        </h2>

        <h5> In {{ $ghost->origin }}</h5>
        <p>{{ $ghost->thumbnail_text }}</p>

    </article> --}}
@endforeach

    
@endsection