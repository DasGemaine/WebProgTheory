@extends('layouts.main')
@section('content')

<section class="h-100 gradient-custom-2">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-9 col-xl-7">
          <div class="card  rounded-top border-0" style="height: 320px">
            <div class="rounded-top text-white d-flex flex-row" style="background-color:#0C7B93; ?>; height:200px;">
              <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">


                <img src="{{ $user->image }}" alt="Profile Image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1; height: 150px">
                
                {{-- @if (Auth::user()->id == $user->id)
                  <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark" style="z-index: 1;">
                    Edit profile
                  </button>
                @endif --}}

                <a href="/profile/{{ $user->name }}/edit" class="btn btn-outline-dark" data-mdb-ripple-color="dark" style="z-index: 1;">
                  Edit profile
                </a>

                {{-- <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark" style="z-index: 1;">
                  Edit profile
                </button> --}}
        
              </div>
              <div class="ms-3" style="margin-top: 130px;">
                <h5>{{ $user->name }}</h5>
                <p>{{ $user->role }}</p>
              </div>
            </div>
            <div class="p-4 text-black" style="background-color: #f8f9fa;">
              <div class="d-flex justify-content-end text-center py-1">
                <div>
                  <p class="mb-1 h5">{{ $count }}</p>
                  <p class="small text-muted mb-0">Story</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

    
@endsection