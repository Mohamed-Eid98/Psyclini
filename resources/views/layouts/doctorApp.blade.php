<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @if (Auth::guard('doctor')->check() )
                  
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::guard('doctor')->user()->name}}
                            </a>
            
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="adminDropdown">
                              <a href="{{route('doctor.index')}}" class="dropdown-item">Dashboard</a>
                              <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#admin-logout-form').submit();">
                                  Logout
                              </a>
                              <form id="admin-logout-form" action="{{ route('doctors.logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                        </li>         
                    @endif 
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4"> 
            @yield('content')
        </main>
    </div>

    
    <!-- Scripts -->

</body>
</html>
