<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
          <use xlink:href="#bootstrap" />
        </svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 text-white">About</a></li>
      </ul>

              <form class="col-20 col-lg-auto mb-3 mb-lg-0 me-lg-3" >
                <input href="{{ route('users.search') }}" type="search" name="search" class="form-control form-control-dark" placeholder="Search ..." aria-label="Search">
              </form>

              @auth
              {{auth()->user()->name}}
              <div class="text-end">
                <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2 position-absolute top-0 end-0">Logout</a>
                <a href="{{ route('table.show') }}" class="btn btn-outline-light me-2 position-absolute top-0 start-0">Users Table</a>
              </div>
              @endauth

              @guest
              <div class="text-end">
                <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
                <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
              </div>
              @endguest
          </div>
        </div>
</header>