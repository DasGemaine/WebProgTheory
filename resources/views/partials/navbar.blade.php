<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
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
                <a class="nav-link active" href="/stories">Ghosts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/fight">How to Fight</a>
              </li>
              @auth
                <li class="nav-item">
                  <a class="nav-link active" href="/experiences">Share</a>
                </li>
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
              <a class="nav-link active" href="/add-ghost">Add Ghost</a>
            </li>

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
            </ul>
          </div>
        </div>
      @endguest
      
    </div>
  </nav>

  {{-- {{ ($title === "Stories") ? 'active' : '' }} --}}
