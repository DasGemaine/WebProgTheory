<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Folklore</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="/ghosts">Ghosts</a>
              </li>

              @auth
                @if (Route::currentRouteName() == 'ghosts' && Auth::user()->role == 'admin')
                  <li class="nav-item">
                    <a class="nav-link active" href="/ghosts/add-ghost">Add Ghost</a>
                  </li>
                @endif

                <li class="nav-item">
                  <a class="nav-link active" href="/stories">Stories</a>
                </li>

                {{-- @if (Route::currentRouteName() == 'stories' && Auth::user()->role != 'admin')
                  <li class="nav-item">
                    <a class="nav-link active" href="/stories/add-story">Share Story</a>
                  </li>
                @endif --}}
              @endauth 
            </ul>
          </div>
        </div>
      </div>
      @auth

      <div class="container p-0">
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
          <ul class="navbar-nav">



            @auth
            <div class="dropdown">
              <button class="btn btn-profile dropdown-toggle text-light" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="/profile/{{ Auth::user()->name }}">Profile</a></li>
                <li class="nav-item ml-4">
                  <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-logout">Logout</button>
                  </form>
                </li>
              </ul>
            </div>
            @endauth


            

            
            

          </ul>
        </div>
      </div>

      @endauth
      @guest
        <div class="container p-0">
          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="/login">Login</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="/register">Register</a>
              </li>

            </ul>
          </div>
        </div>
      @endguest
      
    </div>
  </nav>

  {{-- {{ ($title === "Stories") ? 'active' : '' }} --}}
