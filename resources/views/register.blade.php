@extends('layouts.main')
@section('content')
<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
  
                <form action="/register" method="POST">
                  @csrf
                  <div class="form-outline mb-4">
                    <input type="text" id="name" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" />
                    <label class="form-label" for="name">Your Name</label>
                    @error('name')
                      <div class="text-danger">{{ $message }} </div>  
                    @enderror
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" />
                    <label class="form-label" for="email">Your Email</label>
                    @error('email')
                      <div class="text-danger">{{ $message }} </div>  
                    @enderror
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" />
                    <label class="form-label" for="password">Password</label>
                    @error('password')
                      <div class="text-danger">{{ $message }} </div>  
                    @enderror
                  </div>

                  <div class="d-flex justify-content-center">
                    <button type="submit" class="bg-danger btn  btn-block btn-lg text-light">Register</button>
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
