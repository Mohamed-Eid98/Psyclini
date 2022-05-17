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
    <div id="app">    <div id="sidebar" class="active ">
        <div class="sidebar-wrapper active">
          <div class="sidebar-header">
            <div class="d-flex justify-content-between">
              <div class="logo">
                <a href="{{ route('admin.index') }}"><img src="../img/logo.png" alt="Logo" srcset=""></a>
              </div>
              <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"></a>
              </div>
            </div>
          </div>
          <div class="sidebar-menu">
            <ul class="menu">            
              <li class="sidebar-item active ">
                <a href="{{ route('admin.index') }}" class='sidebar-link'>
                  <span>Dashboard</span>
                </a>
              </li>
                
              <li class="sidebar-item has-sub">
                <a href="#" class='sidebar-link'>
                  <span>Appointments</span>
                </a>
                <ul class="submenu ">
                   <li class="submenu-item ">
                    <a href="{{ route('admin.modify.appoinments') }}">Modify Appointments</a>
                  </li>
                </ul>
              </li>
              
              <li class="sidebar-item has-sub">
                <a href="#" class='sidebar-link'>
                  <span>Approve</span>
                </a>
                <ul class="submenu ">
                  <li class="submenu-item ">
                    <a href="{{ route('admin.approve.posts') }}">Posts</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="{{ route('admin.approve.requests') }}">Doctors' Requests</a>
                  </li>
                </ul>
              </li>
  
              <li class="sidebar-item ">
                <a href="{{ route('admin.contact.response') }}" class="sidebar-link"> 
                  <span>Contact Us Responses</span>
                </a>
              </li>
              
              <li class="sidebar-item">
                <a href="{{ route('admin.createDRAccount') }}" class="sidebar-link"> 
                  <span>Create Doctor's Account</span>
                </a>
              </li>
  
              <li class="sidebar-item ">
                <a href="{{ route('home') }}" class="sidebar-link"> 
                  <span>Go to the Main Website <i class="icofont-simple-right"></i></span>
                </a>
              </li>
  
  
              
  
            </ul>           
          </div>
        </div>
      </div>
      
        <main class="py-4"> 
            @yield('content')
        </main>
    </div>

    
    <!-- Scripts -->

</body>
</html>
