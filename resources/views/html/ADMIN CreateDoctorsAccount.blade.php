@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/admin main style.css">
    <link rel="stylesheet" href="../css/admin_bootstrap.css">
    <link rel="stylesheet" href="../css/icofont.css">
    <link rel="icon" href="../img/icon.png">
    <title>Psyclini ADMIN/ Create Doctor's Account</title>
    
</head>
<body id="app">

<div class="row">

  <div class="col-lg-1">
    <header class=" ml-5 pt-4">
      <a href="#" class="burger-btn d-block d-xl-none "><i class="icofont-navigation-menu fs-3 "></i></a>
    </header>
  </div>
  
  <div class="justify-content-center col-lg-8 d-flex mt-2">
    <div class="col-lg-9 col-md-9 ">
      <div class=" rounded h-100 p-4">
          <h4 class="mb-4 pt-3 dark-blue-title">Create Doctor's Account</h4>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="John Doe">
            <label for="floatingInput">Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder=".">
            <label for="floatingInput">Social Security Number</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="tel" class="form-control" id="floatingInput" placeholder="012 3456 7890">
            <label for="floatingInput">Phone Number</label>
          </div>          
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="." onfocus="(this.type='date')" onblur="(this.type='text')"required>
            <label for="floatingInput">Date of Birth</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select black-title" id="floatingSelect" aria-label="Floating label select example">
              <option class="op" value="child_adol">Child and Adolescence Disorders</option>
              <option class="op" value="general">General Psychiatry</option>
              <option class="op" value="geriatric">Geriatric Psychiatry</option>
              <option class="op" value="pid">Psychiatry of Intellectual Disability (PID)</option>
              <option class="op" value="marital">Marital and Family Relations</option>
              <option class="op" value="forensic">Forensic Psychiatry</option>
              <option class="op" value="addiction">Addiction</option>
              <option class="op" value="life_coach">Life Coach</option>
            </select>
            <label for="floatingSelect">Department</label>
          </div>
          <div class="form-floating mb-4">
            <input type="password" class="form-control" id="floatingPassword" placeholder="********">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating mb-3 pt-1">
            <input type="file" class="form-control p-custom " id="floatingImg" accept="image/*" >
            <label for="floatingImg" >Profile Picture</label>
          </div>
          <div class="form-group mb-5 mt-4">
            <input type="submit" class="btn btn-primary rounded-pill w-100" name="" value="Create Account">
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