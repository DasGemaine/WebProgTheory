

@extends('layouts.main')
@section('content')

@if (session()->has('success_add-ghost'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success_add-ghost') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif



{{-- <div class="row">
    <div class="col"></div>
</div> --}}


@foreach ($ghosts as $ghost)
    <article class='mb-4'>
        <h2>
            <a href="/ghosts/{{$ghost->name}}/detail">
                {{ $ghost->name}}
            </a>
        </h2>

        <h5> In {{ $ghost->origin }}</h5>
        <p>{{ $ghost->thumbnail_text }}</p>

    </article>
@endforeach

    
@endsection