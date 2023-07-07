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
        <div class="grid-container">

          <!-- Header -->
          <header class="header">
            <div class="menu-icon" onclick="openSidebar()">
              <span class="material-icons-outlined">menu</span>
            </div>
            <div class="header-left">
              <span class="material-icons-outlined">search</span>
            </div>
            <div class="header-right">
              <span class="material-icons-outlined">account_circle</span>
            </div>
          </header>
          <!-- End Header -->

          <!-- Sidebar -->
          <aside id="sidebar">
            <div class="sidebar-title">
              <div class="sidebar-brand">            
                DATA MAHASISWA
              </div>
              <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
            </div>

            <ul class="sidebar-list">
              <li class="sidebar-list-item">
                <a href="/">
                  <span class="material-icons-outlined">dashboard</span> Dashboard
                </a>
              </li>
            </ul>
          </aside>
          <!-- End Sidebar -->

          <!-- Main -->
          <main class="main-container">
            <div class="main-title">
              <h2 class="text-uppercase p-4">@yield('title')</h2> 
            </div>

            <div class="main-cards">
              @yield('content')

            </div>

          </main>
          <!-- End Main -->

        </div>

        <!-- Scripts -->
        <!-- ApexCharts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
        <!-- Custom JS -->
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>