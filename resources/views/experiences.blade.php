@extends('layouts.main')
@section('content')
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
    <a href="/" class="mt-5">Back To Home</a>

@endsection