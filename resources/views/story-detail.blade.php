@extends('layouts.main')
@section('content')
    <article class="text-light">
        <h2>
            {{ $story->title }}
        </h2>
        <h5>
            By {{ $story->user->name }}
        </h5>
        {{-- <div class="trix-content">
            {{ $ghosts->information }}
        </div> --}}

        {!! $story->story !!}
    </article>
    {{-- <a href="/fight" ><h5 class="mb-2">How you can fight Kappa</h5></a> --}}
    <a href='/stories' class="text-decoration-none"><h6 class="mb-2">Back To Stories</h6></a> 


    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
@endsection