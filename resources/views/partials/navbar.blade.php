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
            
            <li class="nav-item">
              <form action="/logout" method="POST">
                @csrf
                <div class="card-update text-center">
                    <button type="submit" class="btn btn-logout border-0 text-light">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-box-arrow-in-left text-light" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
                        <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                      </svg>
                      Log out</button> 
                </div>
              </form>
            </li>

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
