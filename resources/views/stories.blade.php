@extends('layouts.main')
@section('content')


@if (session()->has('success_add-story'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success_add-story') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


@foreach ($stories as $story)
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endforeach
{{-- 

    <article>
        <select class="form-select mb-2" aria-label="Default select example">
            <option selected>Ghost</option>
            <option value="1">Kappa | Japan</option>
            <option value="2">Dracula | Romania</option>
            <option value="3">Kuntilanak | Indonesia</option>
        </select>
        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Share your experiences here</label>
          </div>
          <input class="btn btn-primary mt-2 mb-2" type="submit" value="Submit">
    </article>
    <a href="/" class="mt-5">Back To Home</a> --}}

@endsection