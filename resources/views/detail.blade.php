@extends('layouts.main')
@section('content')
    <article class="text-light">
        <h2>
            {{ $ghosts->name }}
        </h2>
        <h5>
           {{ $ghosts->origin }}
        </h5>
        <div class="container d-flex justify-content-center align-items-center mb-3">
            <img src={{ asset($ghosts->ghost_image) }} alt="" height="25%" width="25%">
        </div>

        {{-- <div class="trix-content">
            {{ $ghosts->information }}
        </div> --}}

        {!!$ghosts->information !!}
    </article>
    {{-- <a href="/fight" ><h5 class="mb-2">How you can fight Kappa</h5></a> --}}
    <a href='/ghosts' class="text-decoration-none"><h6 class="mb-2">Back To Ghost</h6></a> 


    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
@endsection