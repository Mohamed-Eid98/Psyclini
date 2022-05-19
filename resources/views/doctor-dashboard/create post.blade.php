@extends('layouts.doctorApp')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psyclini DOCTOR/ Create Post</title>
    
    <link rel="stylesheet" href="../css/admin_bootstrap.css">
    <link rel="stylesheet" href="../css/home_style.css">
    <link rel="stylesheet" href="../css/icofont.css">
    <link rel="stylesheet" href="../css/admin main style.css">
    <link rel="icon" href="../img/icon.png">
</head>

<body>  <div id="app">
  <div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
      <div class="sidebar-header">
        <div class="d-flex justify-content-between">
          <div class="logo">
            <a href="{{ route('doctor.index') }}"><img src="../img/logo.png" alt="Logo" srcset=""></a>
          </div>
          <div class="toggler">
            <a href="#" class="sidebar-hide d-xl-none d-block"></a>
          </div>
        </div>
      </div>
      <div class="sidebar-menu">
        <ul class="menu">            
          <li class="sidebar-item active ">
            <a href="{{ route('doctor.index') }}" class='sidebar-link'>
              <span>Dashboard</span>
            </a>
          </li>
            
          <li class="sidebar-item has-sub">
            <a href="#" class='sidebar-link'>
              <span>Appointments</span>
            </a>
            <ul class="submenu ">
              <li class="submenu-item ">
                <a href="{{ route('doctor.modifications') }}">Request Modifications</a>
              </li>
              <li class="submenu-item ">
                <a href="{{ route('doctor.status') }}">Requests' Status</a>
              </li>
            </ul>
          </li>
          
          <li class="sidebar-item has-sub active">
            <a href="#" class='sidebar-link'>
              <span>Publish</span>
            </a>
            <ul class="submenu active">
              <li class="submenu-item active">
                <a href="{{ route('doctor.post') }}">Post</a>
              </li>
              <li class="submenu-item ">
                <a href="{{ route('doctor.article') }}">Article</a>
              </li>
            </ul>
          </li>

          <li class="sidebar-item ">
            <a href="{{  route('home')}}" class="sidebar-link"> 
              <span>Go to the Main Website <i class="icofont-simple-right"></i></span>
            </a>
          </li>
          <li class="sidebar-item log-out ">
            <a href="#" class="text-muted">Log Out</a>
          </li>
          
        </ul>           
      </div>
    </div>
  </div>
  
    
    <div id="main">

      <header class="mb-4">
        <a href="#" class="burger-btn d-block d-xl-none"><i class="icofont-navigation-menu fs-3"></i></a>
      </header>
      
      <div class="container pt-4">
          <div class="col-lg-12 mb-5"><!--Create a Post-->
            <div class="single-blog-item feature-item create-post">
              <h3 class="mb-4 dark-blue-title create-post-title">Create a Post</h3> 
              <textarea class="form-control mb-4" name="comment" id="comment" cols="30" rows="5" placeholder="What are you thinking??"></textarea>
              <label class="dep-lable">Department
                <select class="form-select post-dep-dropdown" >
                  <option class="op" value="child_adol">Child and Adolescence Disorders</option>
                  <option class="op" value="general">General Psychiatry</option>
                  <option class="op" value="geriatric">Geriatric Psychiatry</option>
                  <option class="op" value="pid">Psychiatry of Intellectual Disability (PID)</option>
                  <option class="op" value="marital">Marital and Family Relations</option>
                  <option class="op" value="forensic">Forensic Psychiatry</option>
                  <option class="op" value="addiction">Addiction</option>
                  <option class="op" value="life_coach">Life Coach</option>
                </select>
              </label>
              <label class="text-muted add-img">
                <i class="icofont-image"><input type="file" name="post-pic" id="post-pic" class="post-pic" accept="image/*"></i>
                Add an Image 
              </label>
              <input type="submit" class="btn btn-primary rounded-pill w-100 post-btn mt-4" name="" value="Post">
            </div>
          </div>
        </div>

        
      </div>

    </div>
  </div>


  
  <script src="../js/bootstrap.bundle.js"></script> 
  <script src="../js/admin main script.js"></script>
</body>

</html>
@endsection