<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
    {{-- Style CSS --}}
    <link rel="stylesheet" href="style.css">
    <title>MAIBOUTIQUE</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="" href="/">MAIBOUTIQUE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                @yield('navhome')
              </li>
              <li class="nav-item">
                {{-- <a class="nav-link" href="/search">Search</a> --}}
                @yield('item0')
              </li>
              <li class="nav-item">
                {{-- <a class="nav-link" href="#">Cart</a> --}}
                @yield('item1')
              </li>
              <li class="nav-item">
                {{-- <a class="nav-link" href="#">History</a> --}}
                @yield('item2')
              </li>
              <li class="nav-item">
                @yield('item3')
              </li>
              <li class="nav-item">
                @yield('addItem')
              </li>
              <li class="nav-item-logout">
                @yield('logoutItem')
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div>
        @yield('body')
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


  </body>
</html>
