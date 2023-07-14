
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light  container">
    <div class="container">
      <a class="navbar-brand" href="/">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <a class="nav-link " href="login" style="">Log in</a>
        
          <a class="nav-link " href="register" style="">Sign in</a>
          @if (Route::has('login'))
          @auth
        
          <a href="{{ route('logout') }}" class="navlink pt-2 pt-1" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="text-decoration: none;color:gray">
            Log out </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        
            @endauth
          @endif
        </ul>
      </div>
      <button class="btn btn btn-secondary">Contact Us</button>
    </div>
  </nav>
      <div class="container-fluid">
        @yield('name')
      </div>
      
      
      <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
