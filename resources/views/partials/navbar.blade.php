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

              @if (Route::currentRouteName() == 'ghosts')
                <li class="nav-item">
                  <a class="nav-link active" href="/ghost/weakness">How to Fight</a>
                </li>
              @endif

              @auth
                @if (Route::currentRouteName() == 'ghosts' && Auth::user()->role == 'admin')
                  <li class="nav-item">
                    <a class="nav-link active" href="/ghosts/add-ghost">Add Ghost</a>
                  </li>
                @endif

                <li class="nav-item">
                  <a class="nav-link active" href="/stories">Stories</a>
                </li>

                @if (Route::currentRouteName() == 'stories' && Auth::user()->role != 'admin')
                  <li class="nav-item">
                    <a class="nav-link active" href="/stories/add-story">Share Story</a>
                  </li>
                @endif
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
                <div class=" card-update">
                    <button type="submit" class="btn btn-danger">Log out</button> 
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
