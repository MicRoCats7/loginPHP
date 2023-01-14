  {{--------------- Navbar ------------}}
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home">MicRoCats</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/book/all">Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/publisher/all">Publisher</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          @auth
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome, {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window"></i>
                              Dashboard</a></li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>
                      <li>
                          <form action="/logout" method="POST">
                              @csrf
                              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                  Logout</button>
                          </form>
                      </li>
                  </ul>
              </li>
          @else
              <li class="nav-item">
                  <a href="login" class="nav-link text-dark"><i class="bi bi-box-arrow-in-right"></i>Login</a>
              </li>
          @endauth
        </ul>

        {{-- <form class="d-flex" role="search">
          <a href="login" class="btn btn-outline-success me-2">Login</a>
          <a href="register" class="btn btn-outline-success">Register</a>
        </form> --}}
      </div>
    </div>


  </nav>

{{------------- End Navbar --------------------}}