<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>@yield('title')</title>

        <!-- Montserrat Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <!-- Bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    </head>
    <body>
        <header class="header">
            <div class="header-left">
                <h3 class="text-uppercase mt-2">moraa florist</h3>
            </div>
            <ul>
                @auth     
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Selamat Datang, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                      {{-- <li><a class="dropdown-item" href="/">My Dashboard</a></li> --}}
                      <li><hr class="dropdown-divider"></li>
                      <li>
                          <form method="POST" action="/logout">
                            @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                          </form>
                      </li>
                    </ul>
                @endauth
            </ul>
        </header>

        <div class="container">
            @yield('content')
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <!-- Custom JS -->
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>