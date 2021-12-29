@extends('layouts.main')
@section('content')

@if (session()->has('success_register'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success_register') }}
    <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

@if (session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<section class="gradient-custom">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-danger text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <div class=" mt-md-4 pb-5">
                <form action="/login" method="POST">
                  @csrf
                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>

                  <div class="form-outline form-white mb-4">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" 
                    
                    @if (Cookie::has('email'))
                      value="{{Cookie::get('email')}}"   
                    @endif  
          
                    autofocus required value="{{ old ('email') }}"/>
                    <label class="form-label" for="email">Email</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" 
                    
                    @if (Cookie::has('password'))
                      value="{{Cookie::get('password')}}"   
                    @endif  
                    />
                    <label class="form-label" for="password">Password</label>
                  </div>

                  <div class="checkbox mb-3">
                    <label>
                      <input type="checkbox" 
            
                      @if (Cookie::has('password'))
                        checked
                      @endif 
            
                    value="1" name="remember"> Remember me
                    </label>
                  </div>

                  <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                </form>
                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>
              </div>
              <div>
                <p class="mb-0">Don't have an account? <a href="/register" class="text-white-50 fw-bold">Sign Up</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
