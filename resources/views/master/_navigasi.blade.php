<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MyWeb</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">ffff</span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link dark" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('about') }}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/siswa/view">Data Siswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/siswa">Input Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
      </li>
    </ul>
  </div>
</nav>