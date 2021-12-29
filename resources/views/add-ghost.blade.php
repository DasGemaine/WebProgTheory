@extends('layouts.main')
@section('content')

<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Add New Ghost</h2>

                            <form action="/ghosts/add-ghost" method="POST">
                            @csrf
                            <i class="flag flag-us"></i>
                            <div class="form-outline mb-4">
                                <input type="text" id="name" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" />
                                <label class="form-label" for="name">Ghost Name</label>
                                @error('name')
                                    <div class="text-danger">{{ $message }} </div>  
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="furniture_type">Furniture Type</label>
                                <select class="form-control @error('furniture_type') is-invalid @enderror" id="furniture_type" name="furniture_type">
                                    <option selected>Choose...</option>
                                    {{-- @foreach ($types as $type)
                                        <option>{{$type->type}}</option>
                                    @endforeach --}}
                                </select>
                                @error('furniture_type')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                            </div>
    

                            <div class="form-outline mb-4">
                                <input type="password" id="thumbnail_text" name="thumbnail_text" class="form-control form-control-lg @error('thumbnail_text') is-invalid @enderror" />
                                <label class="form-label" for="thumbnail_text">Password</label>
                                @error('thumbnail_text')
                                <div class="text-danger">{{ $message }} </div>  
                                @enderror
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="bg-danger btn  btn-block btn-lg text-light">Add Ghost</button>
                            </div>
                            </form>

                            <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/login" class="fw-bold text-body"><u>Login here</u></a></p>
                        

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection